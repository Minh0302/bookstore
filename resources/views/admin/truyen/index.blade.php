@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">STT</th>
                          <th scope="col">Tên truyện</th>
                          <th scope="col">Tác giả</th>
                          <!-- <th scope="col">Slug truyện</th> -->
                          <th scope="col">Hình ảnh</th>
                          <th scope="col">Tóm tắt</th>
                          <th scope="col">Danh mục</th>
                          <th scope="col">Thể loại</th>
                          <th scope="col">Kích hoạt</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach($truyen as $key =>$tr)
                        <tr>
                          <th scope="row">{{$i++}}</th>
                          <td>{{$tr->tentruyen}}</td>
                          <td>{{$tr->tacgia}}</td>
                          <!-- <td>{{$tr->slug_truyen}}</td> -->
                          <td><img src="{{asset('./uploads/truyen/'.$tr->hinhanh)}}" height="100px" width="100px"></td>
                          <td>{{$tr->tomtat}}</td>
                          <td>{{$tr->danhmuctruyen->tendanhmuc}}</td>
                          <td>{{$tr->theloai->tentheloai}}</td>
                          <td>
                            @if($tr->kichhoat==0)
                                <span class="text text-success">Kích hoạt</span>
                            @else
                                <span class="text text-danger">Không kích hoạt</span>
                            @endif
                          </td>
                          <td>
                            <a href="{{route('truyen.edit',[$tr->id])}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('truyen.destroy',[$tr->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection