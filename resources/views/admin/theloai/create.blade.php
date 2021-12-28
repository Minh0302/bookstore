@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm thể loại</div>
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
                      <form method="POST" action="{{route('theloai.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên thể loại</label>
                          <input type="text" name="tentheloai" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên thể loại...">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Slug thể loại</label>
                          <input type="text" name="slug_theloai" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug thể loại...">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mô tả thể loại</label>
                          <textarea type="text" name="mota" class="form-control" id="noidung_chapter" aria-describedby="emailHelp" placeholder="Mô tả thể loại..." rows="5" style="resize: none;"></textarea>
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
                        <button type="submit" name="themtheloai" class="btn btn-primary">Thêm</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
