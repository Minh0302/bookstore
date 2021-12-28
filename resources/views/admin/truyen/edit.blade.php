@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật truyện</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <form method="POST" action="{{route('truyen.update',[$truyen->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên truyện</label>
                          <input type="text" name="tentruyen" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" value="{{$truyen->tentruyen}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Từ khoá</label>
                          <textarea type="text" name="tukhoa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="3" style="resize: none;">{{$truyen->tukhoa}}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tác giả</label>
                          <input type="text" name="tacgia" class="form-control" aria-describedby="emailHelp" value="{{$truyen->tacgia}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Slug truyện</label>
                          <input type="text" name="slug_truyen" class="form-control" id="convert_slug" aria-describedby="emailHelp" value="{{$truyen->slug_truyen}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tóm tắt truyện</label>
                          <textarea type="text" name="tomtat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="5" style="resize: none;">{{$truyen->tomtat}}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Danh mục truyện</label>
                          <select class="custom-select" id="inputGroupSelect01" name="danhmuc">
                            @foreach($danhmuc as $key => $dm)
                                @if($dm->id==$truyen->danhmuc_id)
                                    <option selected value="{{$dm->id}}">{{$dm->tendanhmuc}}</option>
                                @else
                                    <option value="{{$dm->id}}">{{$dm->tendanhmuc}}</option>
                                @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thể loại</label>
                          <select class="custom-select" id="inputGroupSelect01" name="theloai">
                            @foreach($theloai as $key => $tl)
                                @if($tl->id==$truyen->theloai_id)
                                    <option selected value="{{$tl->id}}">{{$tl->tentheloai}}</option>
                                @else
                                    <option value="{{$tl->id}}">{{$tl->tentheloai}}</option>
                                @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Hình ảnh truyện</label>
                          <input type="file" name="hinhanh" class="form-control">
                          <img src="{{asset('./uploads/truyen/'.$truyen->hinhanh)}}" height="100" width="100">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01" name="kichhoat">
                            @if($truyen->kichhoat==0)
                                <option >Choose...</option>
                                <option selected value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            @else
                                <option >Choose...</option>
                                <option value="0">Kích hoạt</option>
                                <option selected value="1">Không kích hoạt</option>
                            @endif
                          </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary">Cập nhật</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
