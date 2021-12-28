<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
    <link href="{{ asset('./css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> -->
    <style type="text/css">
        .switch_color {
            background: #181818;
            color: #fff;
        }

        .switch_color_light {
            background: #181818 !important;
            color: #000;
        }

        .noidung_color {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container" id="container">
        <!---------- MENU ------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('./images/logo.png')}}" width="120px" height="80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Danh mục truyện
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($danhmuc as $key => $dm)
                            <a class="dropdown-item" href="{{url('danh-muc/'.$dm->slug_danhmuc)}}">{{$dm->tendanhmuc}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thể loại
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($theloai as $key => $the)
                            <a class="dropdown-item" href="{{url('the-loai/'.$the->slug_theloai)}}">{{$the->tentheloai}}</a>
                            @endforeach
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <form autocomplete="off" class="form-inline my-2 my-lg-0" action="{{url('tim-kiem')}}" method="POST">
                    @csrf
                    <input class="form-control mr-sm-2" id="keywords" name="tukhoa" type="search" placeholder="Search" aria-label="Search">
                    <div id="search_ajax"></div>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                    <select class="custom-select mr-sm-2" id="switch_color">
                        <option value="xam">Xám</option>
                        <option value="den">Đen</option>
                    </select>
                </form>
            </div>
        </div>
        <br>
        <!---------- Sach hay nen doc ------------->
        @yield('slide')
        <!---------- sach moi cap nhat ------------->
        @yield('content')
        <footer>
            <div class="bg-dark text-secondary px-4 py-5 text-center">
                <div class="py-5">
                    <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
                            <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button>
                            <a href="#" class="btn btn-outline-light btn-lg px-4">Back to top</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('./js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        show_wishlist();

        function show_wishlist() {
            if (localStorage.getItem('wishlist_truyen') != null) {
                const data = JSON.parse(localStorage.getItem('wishlist_truyen'));
                data.reverse();
                for (i = 0; i < data.length; i++) {
                    const id = data[i].id;
                    const title = data[i].title;
                    const img = data[i].img;
                    const url = data[i].url;
                    $('#wishlist').append(`
                        <div class="col-mt-3">
                            <div class="col-md-5"><img class="img img-responsive cart-img-top wishlist_img" src="` + img + `" alt="` + title + `" width="80" height="100"></div>
                            <div class="col-md-7 sidebar">
                                <a href="` + url + `">
                                    <p style="color:#666">` + title + `</p>
                                </a>
                            </div>
                        </div>
                        `);
                }
            }
        }
        $('.btn_wishlist_story').click(function() {
            $('.fas.fa-heart').css('color', '#fac');
            const id = $('.wishlist_id').val();
            const title = $('.wishlist_title').val();
            const img = $('.wishlist_img').attr('src');
            const url = $('.wishlist_url').val();

            const item = {
                'id': id,
                'title': title,
                'img': img,
                'url': url
            }
            if (localStorage.getItem('wishlist_truyen') == null) {
                localStorage.setItem('wishlist_truyen', '[]');
            }
            const old_data = JSON.parse(localStorage.getItem('wishlist_truyen'));
            const match = $.grep(old_data, function(obj) {
                return obj.id == id;
            })
            if (match.length) {
                alert('Truyện đã có trong yêu thích!!!');
            } else {
                if (old_data.length < 5) {
                    old_data.push(item);
                } else {
                    alert('Yêu thích vượt quá giới hạn!!!');
                }
                $('#wishlist').append(`
                <div class="col-mt-3">
                    <div class="col-md-5"><img class="img img-responsive cart-img-top wishlist_img" src="` + img + `" alt="` + title + `" width="80" height="100"></div>
                    <div class="col-md-7 sidebar">
                        <a href="` + url + `">
                            <p style="color:#666">` + title + `</p>
                        </a>
                    </div>
                </div>
                `);
                localStorage.setItem('wishlist_truyen', JSON.stringify(old_data));
                alert('Đã thêm vào danh sách yêu thích!!!');
            }
            localStorage.setItem('wishlist_truyen', JSON.stringify(old_data));
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            if (localStorage.getItem('switch_color') != null) {
                const data = localStorage.getItem('switch_color');
                const data_object = JSON.parse(data);
                $(document.body).addClass(data_object.class_1);
                $('.album').addClass(data_object.class_2);
                $('.card-body').addClass(data_object.class_1);
                $('noidungchuong').toggleClass('noidung_color');
                $('ul.mucluctruyen > li > a').css('color', '#fff');

                $('select option[value="den"]').attr('selected', 'selected');
            }
            $("#switch_color").change(function() {
                $(document.body).toggleClass('switch_color');
                $('.album').toggleClass('switch_color_light');
                $('.card-body').toggleClass('switch_color');
                $('noidungchuong').toggleClass('noidung_color');
                $('ul.mucluctruyen > li > a').css('color', '#fff');

                if ($(this).val() == 'den') {
                    const item = {
                        'class_1': 'switch_color',
                        'class_2': 'switch_color_light',
                    }
                    localStorage.setItem('switch_color', JSON.stringify(item));
                } else if ($(this).val() == 'xam') {
                    localStorage.removeItem('switch_color');
                    $('ul.mucluctruyen > li > a').css('color', '#000');
                }
            });
        })
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            // nav:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script type="text/javascript">
        $('.select-chapter').on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });
        current_chapter();

        function current_chapter() {
            var url = window.location.href;
            $('select[name="select-chapter"]').find('option[value="' + url + '"]').attr("selected", true);
        }
    </script>
    <script type="text/javascript">
        $('#keywords').keyup(function() {
            var keywords = $(this).val();
            if (keywords != '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{url('/timkiem-ajax')}}",
                    method: "POST",
                    data: {
                        keywords: keywords,
                        _token: _token
                    },
                    success: function(data) {
                        $('#search_ajax').fadeIn();
                        $('#search_ajax').html(data);
                    }
                });
            } else {
                $('#search_ajax').fadeOut();
            }
        });
        $(document).on('click', '.li_search_ajax', function() {
            $('#keywords').val($(this).text());
            $('#search_ajax').fadeOut();
        });
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=473681730393854&autoLogAppEvents=1" nonce="tdzvLaM8"></script>
</body>

</html>