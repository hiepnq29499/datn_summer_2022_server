<?php
    require "../dbconnect.php";
    session_start();
    if(!isset($_SESSION['user_name']) && !isset($_SESSION['password'])){
        echo '<script type="text/JavaScript"> 
        window.open("http://datn4.000webhostapp.com/Web/Login_web.html","_self");
      </script>';
    }
    if($_SESSION['user_name'] != 'admin' && $_SESSION['password'] != 'admin'){
        session_start();
        session_unset();
        session_destroy();
        echo '<script type="text/JavaScript"> 
        window.open("http://datn4.000webhostapp.com/Web/Login_web.html","_self");
      </script>';
    }
    $signup_employee_html = '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- import font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600&display=swap"
          rel="stylesheet"
        />
        <!-- import tailwindcss -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- import css -->
        <link rel="stylesheet" href="main.css" />
        <!-- import js -->
        <script src="main.js"></script>
        <!-- title -->
        <link rel="stylesheet" href="Signup_web.css">
        <title>home</title>
      </head>
    
      <body>
        <div
          class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header font-["Lexend_Deca"]"
        >
          <!-- header -->
          <div class="app-header header-shadow h-[70px] flex justify-between">
            <!-- logo -->
            <div class="app-header__logo">
              <div class="logo-src flex items-center justify-center w-20">
                <img class="w-[80px] h-[80px]" src="logo.png" alt="" />
              </div>
              <div class="header__pane ml-auto">
                <div>
                  <button
                    type="button"
                    class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar"
                  >
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                  </button>
                </div>
              </div>
            </div>
            <div class="pr-8">
              <form action="Logout_user.php" method="get">
                <input type="submit"
                class="rounded-md bg-sky-400 hover:bg-sky-500 delay-200 px-4 py-2 font-medium text-white"
                value="Đăng xuất"
              />
              </form>
            </div>
          </div>
          <!-- body -->
          <div class="app-main">
            <!-- menu left -->
            <div class="app-sidebar sidebar-shadow pt-20">
              <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                  <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading"></li>
                    <li>
                      <a href="main_page.php" class="mm-active">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Trang chủ
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Người dùng
                        <i
                          class="metismenu-state-icon pe-7s-angle-down caret-left"
                        ></i>
                      </a>
                      <ul>
                        <li>
                          <a href="http://datn4.000webhostapp.com/Web/list_user.php?status=all&search_value=">
                            <i class="metismenu-icon"></i>
                            Danh sách người dùng
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        <i class="metismenu-icon pe-7s-box2"></i>
                        Sản phẩm
                        <i
                          class="metismenu-state-icon pe-7s-angle-down caret-left"
                        ></i>
                      </a>
                      <ul>
                        <li>
                          <a href="product_info_page.php">
                            <i class="metismenu-icon"></i>
                            Thêm sản phẩm
                          </a>
                        </li>
                        <li>
                          <a href="http://datn4.000webhostapp.com/Web/list_product.php?product_value=all&product_type=all&search_value=">
                            <i class="metismenu-icon"></i>
                            Danh sách sản phẩm
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="http://datn4.000webhostapp.com/Web/invoice.php?month_value=all">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Hóa đơn chi tiết
                        <i
                          class="metismenu-state-icon pe-7s-angle-down caret-left"
                        ></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- content -->
            <div class="app-main__outer">
              <div class="app-main__inner">
                <!-- code here -->
                <div id="id01" class="modal">
                  <form class="modal-content" action="Signup_web.php" method="post">
                    <div class="container">
                      <p>Điền đầy đủ thông tin vào form này để đăng kí tài khoản.</p>
                      <hr>
                      <label for="uname"><b>Tài khoản</b></label>
                      <input type="text" placeholder="Nhập tài khoản" name="uname" required minlength="8">
                
                      <label for="psw"><b>Mật khẩu</b></label>
                      <input type="password" placeholder="Nhập mật khẩu" name="psw" required minlength="8">
                
                      <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
                      <input type="password" placeholder="Xác nhận mật khẩu" name="psw-repeat" required minlength="8">
                
                      <label for="psw-repeat"><b>Họ và tên</b></label>
                      <input type="text" placeholder="Họ và tên" name="name" required>
                
                      <label for="psw-repeat"><b>Địa chỉ</b></label>
                      <input type="text" placeholder="Địa chỉ" name="address" required>
    
                      <label for="psw-repeat"><b>Email</b></label>
                      <input type="email" placeholder="Email" name="email" required>
    
                      <label for="psw-repeat"><b>Liên hệ</b></label>
                      <input type="text" placeholder="Liên hệ" name="contact" required>
    
                      <div class="clearfix">
                        <button type="submit" class="signupbtn">Sign Up</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
          </div>
        </div>
      </body>
    </html>
    
    ';
    echo $signup_employee_html;
?>