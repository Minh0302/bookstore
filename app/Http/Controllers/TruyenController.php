<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Theloai;
use Carbon\Carbon;

class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $truyen = Truyen::with('danhmuctruyen','theloai')->orderBy('id','DESC')->get();
        return view('admin.truyen.index')->with(compact('truyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $theloai = Theloai::orderBy('id','DESC')->get();
        return view('admin.truyen.create')->with(compact('danhmuc','theloai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tentruyen' => 'required|unique:truyen|max:255',
            'tukhoa' => 'required',
            'tacgia' => 'required|unique:truyen|max:255',
            'slug_truyen' => 'required|unique:truyen|max:255',
            'tomtat' => 'required',
            'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width:100,min_height:100,max_width:1000,max_height:1000',
            'kichhoat' => 'required',
            'danhmuc' =>'required',
            'theloai' =>'required'
        ]);
         
        $truyen = new Truyen();
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->tukhoa = $data['tukhoa'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $truyen->theloai_id = $data['theloai'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $get_image = $request->file('hinhanh');
        $path = './uploads/truyen/';
        $get_image_name = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_image_name));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image -> move($path,$new_image);

        $truyen->hinhanh = $new_image;    

        $truyen->save();
        return redirect()->back()->with('status','Thêm truyện thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truyen = Truyen::find($id);
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $theloai = Theloai::orderBy('id','DESC')->get();
        return view('admin.truyen.edit')->with(compact('truyen','danhmuc','theloai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tentruyen' => 'required|max:255',
            'tukhoa' => 'required',
            'tacgia' => 'required|max:255',
            'slug_truyen' => 'required|max:255',
            'tomtat' => 'required',
            'kichhoat' => 'required',
            'danhmuc' =>'required',
            'theloai' =>'required'
        ]);
         
        $truyen = Truyen::find($id);
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->tukhoa = $data['tukhoa'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $truyen->theloai_id = $data['theloai'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $get_image = $request->file('hinhanh');
        if($get_image){
            $path = './uploads/truyen/'.$truyen->hinhanh;
            if(file_exists($path)){
                unlink($path);
            }
            $path = './uploads/truyen/';
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image -> move($path,$new_image);

            $truyen->hinhanh = $new_image;    
        }
        $truyen->save();
        return redirect()->back()->with('status','Cập nhật truyện thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $truyen = Truyen::find($id);
        $path = './uploads/truyen/'.$truyen->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        Truyen::find($id)->delete();
        return redirect()->back()->with('status','Xoá truyện thành công!');
    }
}
