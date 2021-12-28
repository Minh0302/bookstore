@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>
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
                      <form method="POST" action="{{route('truyen.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên truyện</label>
                          <input type="text" name="tentruyen" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện...">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Từ khoá</label>
                          <textarea type="text" name="tukhoa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Từ khoá..." rows="3" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tác giả</label>
                          <input type="text" name="tacgia" class="form-control" aria-describedby="emailHelp" placeholder="Tác giả...">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Slug truyện</label>
                          <input type="text" name="slug_truyen" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tóm tắt truyện</label>
                          <textarea type="text" name="tomtat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tóm tắt truyện..." rows="5" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Danh mục truyện</label>
                          <select class="custom-select" id="inputGroupSelect01" name="danhmuc">
                            @foreach($danhmuc as $key => $dm)
                            <option value="{{$dm->id}}">{{$dm->tendanhmuc}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thể loại</label>
                          <select class="custom-select" id="inputGroupSelect01" name="theloai">
                            @foreach($theloai as $key => $tl)
                            <option value="{{$tl->id}}">{{$tl->tentheloai}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Hình ảnh truyện</label>
                          <input type="file" name="hinhanh" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01" name="kichhoat">
                            <option selected>Choose...</option>
                            <option value="0">Kích hoạt</option>
                            <option value="1">Không kích hoạt</option>
                          </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
