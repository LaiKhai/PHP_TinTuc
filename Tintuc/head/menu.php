<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $level.vendor_path."bootstrap-4.1.1-dist/css/bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?php echo $level.vendor_path."fontawesome-free-5\css\all.min.css";?>">
    <link rel="stylesheet" href="<?php echo $level.assets_path."css/style.css";?>">
    <title>Hoạt động thiện nguyện sinh viên</title>



</head>

<body>
    <!-- Top header -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="<?php echo $level.img_path."logo.png";?>" alt="" style="width:80%;">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mt-0 text-white-50" style="margin-left: 45rem;">
                <li class="nav-item active">
                    <a class="nav-link" href="#" onclick="nextHome()"><i class="fa fa-home" aria-hidden="true"></i>
                        Trang Chủ <span class="sr-only">(current)</span></a>
                </li>

                <div class=" dropdown">
                    <span class="btn text-white-50 dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fas fa-bars"></i>
                        Loại
                    </span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top:11%;">
                        <li><a class="dropdown-item" href="#">Hoạt Động Tốt</a></li>
                        <li><a class="dropdown-item" href="#">Câu Chuyện Đẹp</a></li>
                        <li><a class="dropdown-item" href="#">Phòng Chống Dịch</a></li>
                    </ul>
                </div>

                <li class="nav-item ">
                    <a class="nav-link" href=""><i class="fa fa-search" aria-hidden="true"></i> Tìm Kiếm</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " " href="" ><i class=" far fa-address-card"></i> Trang Quản Trị</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo "../../admin/pages/authentication-login.php";?>"><i
                            class="fas fa-user"></i> Đăng Nhập</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:6rem;">