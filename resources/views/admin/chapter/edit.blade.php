@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật chapter</div>
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
                      <form method="POST" action="{{route('chapter.update',[$chapter->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên chapter</label>
                          <input type="text" name="tieude" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" value="{{$chapter->tieude}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Slug chapter</label>
                          <input type="text" name="slug_chapter" class="form-control" id="convert_slug" aria-describedby="emailHelp" value="{{$chapter->slug_chapter}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tóm tắt chapter</label>
                          <textarea type="text" name="tomtat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="5" style="resize: none;">{{$chapter->tomtat}}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nội dung chapter</label>
                          <textarea type="text" name="noidung" class="form-control" id="noidung_chapter1" aria-describedby="emailHelp" rows="5" style="resize: none;">{{$chapter->noidung}}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Truyện</label>
                          <select class="custom-select" id="inputGroupSelect01" name="truyen_id">
                            @foreach($truyen as $key => $tr)
                                @if($tr->id==$chapter->truyen_id)
                                    <option selected value="{{$tr->id}}">{{$tr->tentruyen}}</option>
                                @else
                                    <option value="{{$tr->id}}">{{$tr->tentruyen}}</option>
                                @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01" name="kichhoat">
                            @if($tr->kichhoat==0)
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
