@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục truyện</div>
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
                      <form method="POST" action="{{route('danhmuc.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên danh mục</label>
                          <input type="text" name="tendanhmuc" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên danh mục...">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Slug danh mục</label>
                          <input type="text" name="slug_danhmuc" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug danh mục...">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mô tả danh mục</label>
                          <input type="text" name="mota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">
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
                        <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection