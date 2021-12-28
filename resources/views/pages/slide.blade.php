<h3>SÁCH HAY NÊN ĐỌC</h3>
<div class="owl-carousel owl-theme">
    @foreach($slide_truyen as $key =>$slide)
    <div class="item">
        <img src="{{asset('./uploads/truyen/'.$slide->hinhanh)}}">
        <h4>{{$slide->tentruyen}}</h4>
        <p><i class="fas fa-eye">100</i></p>
        <a href="" class="btn btn-danger">Đọc ngay</a>
    </div>
    @endforeach
</div>