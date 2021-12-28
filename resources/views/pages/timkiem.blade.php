@extends('welcome')
@section('slide')
  @include('pages.slide')
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</</li>
    </ol>
  </nav>
<h3>Bạn tìm kiếm với từ khoá: {{$tukhoa}}</h3>

    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @php
            $count = count($truyen);
            @endphp
            @if($count==0)
              <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        
                      <p>Không tìm thấy truyện...</p>
                    </div>
                  </a>
                </div>
              </div>
            @else
              @foreach($truyen as $key => $tr)
              <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="{{asset('./uploads/truyen/'.$tr->hinhanh)}}" class="card-img-top" width="500" height="350">

                    <div class="card-body">
                        <h4>{{$tr->tentruyen}}</h4>
                      <p class="card-text">{{$tr->tomtat}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="{{url('xem-truyen/'.$tr->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">View</a>
                          <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye">100</i></a>
                        </div>
                        <small class="text-muted">9 mins ago</small>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              @endforeach
            @endif
          </div>
          <br>
          <a href="" class="btn btn-success">Xem tất cả</a>
        </div>
      </div>
@endsection