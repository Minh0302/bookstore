@extends('welcome')

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
		<li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
	</ol>
</nav>
<div class="row">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-3">
				<img src="{{asset('./uploads/truyen/'.$truyen->hinhanh)}}" class="card-img-top wishlist_img" width="500" height="250">
			</div>
			<div class="col-md-9">
				<style type="text/css">
					.infortruyen {
						list-style: none;
					}
				</style>
				@php
				$count_chapter = count($chapter);
				@endphp


				<input type="hidden" name="" class="wishlist_title" value="{{$truyen->tentruyen}}">
				<input type="hidden" name="" class="wishlist_url" value="{{\URL::current()}}">
				<input type="hidden" name="" class="wishlist_id" value="{{$truyen->id}}">

				<ul class="infortruyen">
					<li>
						<div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
					</li>
					<li>
						<h5>Tên truyện: {{$truyen->tentruyen}}</h5>
					</li>
					<li>Tác giả: {{$truyen->tacgia}}</li>
					<li>Danh mục: <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
					<li>Thể loại: <a href="{{url('danh-muc/'.$truyen->theloai->slug_theloai)}}">{{$truyen->theloai->tentheloai}}</a></li>
					<li>Số chapter: {{$count_chapter}}</li>
					<li>Số lược xem: 100</li>
					<li><a href="">Xem mục lục</a></li>
					<li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">Đọc Online</a> <a href="{{url('xem-chapter/'.$chapter_moinhat->slug_chapter)}}" class="btn btn-success">Đọc Chương mới nhất</a></li>
					<br>
					<li><button class="btn btn-danger btn_wishlist_story"><i class="fas fa-heart"></i> Yêu thích</button></li>
				</ul>
			</div>
		</div>
		<div class="col-md-12">
			<p>
				{{$truyen->tomtat}}
			</p>
		</div>
		<hr>
		<style type="text/css">
			.tagcloud05 ul {
				margin: 0;
				padding: 0;
				list-style: none;
			}

			.tagcloud05 ul li {
				display: inline-block;
				margin: 0 0 .3em 1em;
				padding: 0;
			}

			.tagcloud05 ul li a {
				position: relative;
				display: inline-block;
				height: 30px;
				line-height: 30px;
				padding: 0 1em;
				background-color: #3498db;
				border-radius: 0 3px 3px 0;
				color: #fff;
				font-size: 13px;
				text-decoration: none;
				-webkit-transition: .2s;
				transition: .2s;
			}

			.tagcloud05 ul li a::before {
				position: absolute;
				top: 0;
				left: -15px;
				content: '';
				width: 0;
				height: 0;
				border-color: transparent #3498db transparent transparent;
				border-style: solid;
				border-width: 15px 15px 15px 0;
				-webkit-transition: .2s;
				transition: .2s;
			}

			.tagcloud05 ul li a::after {
				position: absolute;
				top: 50%;
				left: 0;
				z-index: 2;
				display: block;
				content: '';
				width: 6px;
				height: 6px;
				margin-top: -3px;
				background-color: #fff;
				border-radius: 100%;
			}

			.tagcloud05 ul li span {
				display: block;
				max-width: 100px;
				white-space: nowrap;
				text-overflow: ellipsis;
				overflow: hidden;
			}

			.tagcloud05 ul li a:hover {
				background-color: #555;
				color: #fff;
			}

			.tagcloud05 ul li a:hover::before {
				border-right-color: #555;
			}
		</style>
		<p>Từ khoá tìm kiếm</p>
		@php
		$tukhoa = explode(",",$truyen->tukhoa)
		@endphp
		<div class="tagcloud05">
			<ul>
				@foreach($tukhoa as $key => $tu)
				<li><a href="{{url('tag/'. \Str::slug($tu))}}"><span>{{$tu}}</span></a></li>
				@endforeach
			</ul>
		</div>
		<hr>
		<h4>Mục lục</h4>
		<ul class="mucluctruyen">
			@if($count_chapter>0)
			@foreach($chapter as $key => $chap)
			<li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
			@endforeach
			@else
			<li>Đang cập nhật mục lục...</li>
			@endif
		</ul>
		<h4>Sách liên quan</h4>
		<div class="row">
			@foreach($cungdanhmuc as $key => $cungdm)
			<div class="col-md-3">
				<div class="card mb-3 shadow-sm">
					<img src="{{asset('./uploads/truyen/'.$cungdm->hinhanh)}}" class="card-img-top" width="500" height="200">
					<div class="card-body">
						<h5>{{$cungdm->tentruyen}}</h5>
						<p class="card-text">{{$cungdm->tomtat}}</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<a href="{{url('xem-truyen/'.$cungdm->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">View</a>
								<a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye">100</i></a>
							</div>
							<!-- <small class="text-muted">9 mins ago</small> -->
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="col-md-3">
		<h3>Sách hay xem nhiều</h3>
		<h3>Yêu thích</h3>
		<div id="wishlist"></div>
	</div>
</div>

@endsection