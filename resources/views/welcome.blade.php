<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/thembaiviet.css') }}">
    <title>HC NEWS</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo HC NEWS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            XÃ HỘI
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">Chính Trị</a></li>
                            <li><a class="dropdown-item" href="#">Môi Trường</a></li>
                            <li><a class="dropdown-item" href="#">Giao Thông</a></li>
                            <li><a class="dropdown-item" href="#">Tin Tức Nóng</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            KINH DOANH
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">Tài Chính</a></li>
                            <li><a class="dropdown-item" href="#">Chứng Khoán</a></li>
                            <li><a class="dropdown-item" href="#">Doanh Nghiệp</a></li>
                            <li><a class="dropdown-item" href="#">Thanh Toán Thông Minh</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            BẤT ĐỘNG SẢN
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">Dự Án</a></li>
                            <li><a class="dropdown-item" href="#">Thị Trường</a></li>
                            <li><a class="dropdown-item" href="#">Nhà Đất</a></li>
                            <li><a class="dropdown-item" href="#">Nhịp Sống Đô Thị</a></li>


                        </ul>
                    </li><li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            THỂ THAO
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">Bóng Đá Trong Nước</a></li>
                            <li><a class="dropdown-item" href="#">Bóng Đá Châu Âu</a></li>
                            <li><a class="dropdown-item" href="#">Võ Thuật</a></li>
                            <li><a class="dropdown-item" href="#">Các Môn Thể Thao Khác</a></li>
                            <li><a class="dropdown-item" href="#">Champions League</a></li>
                            <li><a class="dropdown-item" href="#">Lịch Thi Đấu</a></li>


                        </ul>
                    </li><li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            SỨC KHỎE
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">Sống Khỏe</a></li>
                            <li><a class="dropdown-item" href="#">Dịch Vụ Y Tế Quốc Tế</a></li>
                            <li><a class="dropdown-item" href="#">Tư Vấn</a></li>
                            <li><a class="dropdown-item" href="#">Sức Khỏe Chủ Động</a></li>


                        </ul>
                    </li>
                </ul>
                @if (Route::has('login'))
                <div >
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Đăng nhập</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Đăng ký</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </nav>
</header>
  <div class="container text-center">
    <div class="row">
      <div class="col-2">
        a
      </div>
      <div class="col-8">
        @yield('contentbaiviet')
      </div>
      <div class="col-2">
        c
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<section class="">
  <!-- Footer -->
  <footer class="bg-body-tertiary text-center text-md-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-body">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-body">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2020 Copyright:
      <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</html>
