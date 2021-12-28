<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
use App\Models\Theloai;


class IndexController extends Controller
{
    public function home(){
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        $slide_truyen = Truyen::orderBy('id','ASC')->where('kichhoat',0)->take(8)->get();
        return view('pages.home')->with(compact('danhmuc','truyen','theloai','slide_truyen'));
    }
    public function danhmuc($slug){
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $danhmuc_id = DanhmucTruyen::where('slug_danhmuc',$slug)->first();
        $theloai = Theloai::orderBy('id','DESC')->get();
        $tendanhmuc = $danhmuc_id->tendanhmuc;
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('danhmuc_id',$danhmuc_id->id)->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        return view('pages.danhmuc')->with(compact('danhmuc','truyen','tendanhmuc','theloai','slide_truyen'));
    }
    public function theloai($slug){
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $theloai_id = Theloai::where('slug_theloai',$slug)->first();
        $tentheloai = $theloai_id->tentheloai;
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('theloai_id',$theloai_id->id)->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        return view('pages.theloai')->with(compact('danhmuc','truyen','tentheloai','theloai','slide_truyen'));
    }
    public function xemtruyen($slug){
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('slug_truyen',$slug)->where('kichhoat',0)->first();
        $chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->get();
        $chapter_dau = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->first();
        $chapter_moinhat = Chapter::with('truyen')->orderBy('id','DESC')->where('truyen_id',$truyen->id)->first();
        $cungdanhmuc = Truyen::with('danhmuctruyen','theloai')->where('danhmuc_id',$truyen->danhmuctruyen->id)->whereNotIn('id',[$truyen->id])->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $url_canonical = \URL::current();
        return view('pages.truyen')->with(compact('danhmuc','truyen','chapter','cungdanhmuc','chapter_dau','theloai','slide_truyen','url_canonical','chapter_moinhat'));
    }
    public function xemchapter($slug){
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $truyen = Chapter::where('slug_chapter',$slug)->first();
        $chapter = Chapter::with('truyen')->where('slug_chapter',$slug)->where('truyen_id',$truyen->truyen_id)->first();
        $all_chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->truyen_id)->get();

        $next_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','>',$chapter->id)->min('slug_chapter');
        $previous_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','<',$chapter->id)->max('slug_chapter');
        $min_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','ASC')->first();
        $max_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','DESC')->first();

        //breadcrumb
        $truyen_breadcrumb= Truyen::with('danhmuctruyen','theloai')->where('id',$truyen->truyen_id)->where('kichhoat',0)->first();
        //end breadcrumb
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $url_canonical = \URL::current();

        return view('pages.chapter')->with(compact('danhmuc','truyen','chapter','all_chapter','next_chapter','previous_chapter','min_id','max_id','theloai','truyen_breadcrumb','slide_truyen','url_canonical'));
    }
    public function timkiem(Request $request){
        $data = $request->all();

        $tukhoa = $data['tukhoa'];
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $truyen= Truyen::with('danhmuctruyen','theloai')->where('tentruyen','LIKE','%'.$tukhoa.'%')->orWhere('tacgia','LIKE','%'.$tukhoa.'%')->orWhere('tomtat','LIKE','%'.$tukhoa.'%')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        return view('pages.timkiem')->with(compact('danhmuc','truyen','theloai','tukhoa','slide_truyen'));
    }
    public function timkiem_ajax(Request $request){
        $data = $request->all();
        if($data['keywords']){
            $truyen= Truyen::where('kichhoat',0)->where('tentruyen','LIKE','%'.$data['keywords'].'%')->get();
            $output = '
                        <ul class="dropdown-menu" style="display:block">';
            foreach($truyen as $key => $tr){
                $output.='<li class="li_search_ajax"><a href="#">'.$tr->tentruyen.'</a><li>';

            }
            $output.='</ul>';
            echo $output;
        }
    }
    public function tag($tag){
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen= Truyen::with('danhmuctruyen','theloai')->orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $tags = explode("-",$tag);
        $truyen= Truyen::with('danhmuctruyen','theloai')->where(
            function ($query) use($tags){
                for($i=0;$i<count($tags);$i++){
                    $query->orwhere('tukhoa','LIKE','%'.$tags[$i].'%');
                }
            }
        )->paginate(8);
        return view('pages.tag')->with(compact('tag','danhmuc','truyen','theloai','slide_truyen'));
    }
}
