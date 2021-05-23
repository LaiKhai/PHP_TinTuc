<body>
    <header class="navbar navbar-expand-md navbar-dark bd-navbar position-absolute w-100" style="z-index:999;top:0;">
        <nav class="top-menu container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
            <a class="navbar-brand p-0 me-2" href="/" aria-label="Bootstrap">
                <img src="<?php echo $level.img_path."logo.png"?>" alt="" style="width:80%;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
                aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                    </path>
                </svg>

            </button>
            <div class="collapse navbar-collapse" id="bdNavbar">

                <hr class="d-md-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2 active" aria-current="true href="" >Trang chủ</a>
                    </li>
                    <div class=" dropdown">
                            <span class="btn text-white-50 dropdown-toggle" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Loại
                            </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Hoạt Động Tốt</a></li>
                                <li><a class="dropdown-item" href="#">Câu Chuyện Đẹp</a></li>
                                <li><a class="dropdown-item" href="#">Phòng Chống Dịch</a></li>
                            </ul>
            </div>
            <li class="nav-item col-6 col-md-auto">
                <a class="nav-link p-2" href="">Tìm Kiếm</a>
            </li>
            <li class="nav-item col-6 col-md-auto">
                <a class="nav-link p-2 " " href="" >Trang Quản Trị</a>
                </li>
                <li class=" nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 " " href="" >Đăng Nhập</a>
                            </li>
                </li>
              </ul>
            </div>
          </nav>
    </header> 