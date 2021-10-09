<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store Content</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css"> 
  <script src="<?php echo BASE_URL; ?>public/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/5a63344f2e.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-md-4"><img src="<?php echo BASE_URL; ?>public/upload/Son_logo.png" alt="logo"></div>
            <div class="col-md-4">
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-4"><i class="fas fa-shopping-cart fs-3"></i> <button class="btn btn-primary">Đăng nhập</button></div>
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Book Store</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Trang chủ</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sản phẩm
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Sách Giáo Khoa</a></li>
                                  <li><a class="dropdown-item" href="#">Tiểu Thuyết</a></li>
                                  <li><a class="dropdown-item" href="#">Sách Kinh Tế</a></li>
                                </ul>
                              </li>
    
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Thương Hiệu
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">NXB Giáo Dục</a></li>
                                  <li><a class="dropdown-item" href="#">Nhã Nam</a></li>
                                  <li><a class="dropdown-item" href="#">NXB Trẻ</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Chính sách bán hàng</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Liên hệ</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </nav>
                </div>
    
        </div>
    </header>