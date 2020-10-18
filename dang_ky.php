<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World Phone</title>
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/banner.css" rel="stylesheet">
    <link href="css/left_menu.css" rel="stylesheet">
    <link href="css/khung_sp.css" rel="stylesheet">
    <link href="css/product_box.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/chuyen_trang.css" rel="stylesheet">
    <link href="css/dk.css" rel="stylesheet">
    <link rel="stylesheet" href="css/thong_tin_khach_hang.css">
    <!--style.css have code responsive, so this only on bottom of list css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="dang_ky()">
    <div class="wrapper">
        <!-- phần tiêu đề của trang -->
        <div class="header">
            <a href="index.php" class="logo_worldphone">
                <img src="image/worldphone_logo.png" alt="image/worldphone_logo">
            </a>
            <div class="search_and_cart">
                <div class="search_bar">
                    <input type="text" id="search_txt" placeholder="Tìm ở world phone"><input onclick="search()" type="button" value="TÌM">
                    <a href="gio_hang.php" class="gio_hang"><img src="image/icon/icon-cart.png" alt=""></a>
                </div>
            </div>
            <div class="nav_wrap">
                <div class="nav">
                    <div id="dia_diem">
                        <img src="image/icon/marker_compact.png" alt="">
                        <span>ĐỊA ĐIỂM CỬA HÀNG</span>
                        <img style="margin-left:50px;" src="image\icon\car_compact.png" alt="">
                        <span>GIAO HÀNG 24/7</span>
                    </div>
                    <a href="index.php">HOME</a>
                    <a href="login.php">ĐĂNG NHẬP</a>
                    <a href="dang_ky.php">ĐĂNG KÝ</a>
                    <a href="gio_hang.php">ĐƠN HÀNG</a>
                </div>
            </div>
        </div>
        <!-- END phần tiêu đề của trang -->
        <!-- phần banner quảng cáo -->
        <div class="banner clear_both">
            <div class="slide_show clear_both">
                <div class="slide fade" style="background:url(image/banner/1.png)"></div>
                <div class="slide fade" style="background:url(image/banner/2.png)"></div>
                <div class="slide fade" style="background:url(image/banner/3.png)"></div>
                <div class="slide fade" style="background:url(image/banner/4.png)"></div>
                <div class="dots">
                    <span class="dot" onclick="show_slide_index(0)"></span>
                    <span class="dot" onclick="show_slide_index(1)"></span>
                    <span class="dot" onclick="show_slide_index(2)"></span>
                    <span class="dot" onclick="show_slide_index(3)"></span>
                </div>
                <div class="sm_banner_2">
                    <img style="width:390px" src="image/banner/5.png" alt="image\banner\5">
                    <img style="width:390px;margin-left:6px" src="image/banner/6.png" alt="image\banner\6">
                </div>
            </div>
            <img style="width: 460px;float: right;" src="image/banner/sm1.jpg" alt="">
            <img style="width: 460px;float: right;" src="image/banner/sm2.jpg" alt="">
        </div>
        <!-- END phần banner quảng cáo -->
        <!-- phần menu bên trái -->
        <div class="wrap_left_menu">
            <div class="left_menu">
                <div class="left_menu_header">DANH MỤC SẢN PHẨM </div>
                <div class="list_danh_muc"></div>
            </div>
        </div>
        <!-- END phần menu bên trái -->
        <!-- phần khung chứa tất cả sản phẩm và tiêu đề -->
        <div class="khung_sp">
            <!-- phần tiêu đề của khung -->
            <div class="khung_sp_header">
                <hr class="small_hr">
                <span class="small_txt">ĐĂNG KÝ THÀNH VIÊN</span>
                <hr class="long_hr">
                <span class="big_txt">SIGN UP NOW</span>
            </div>
            <!-- END phần tiêu đề của khung -->
            <!--dang ký-->
            <div class="dangky">
                <!--trái-->
                <div class="dangky1" align="left">
                    <!--sdt-->
                    <div class="item-dk">
                        <p class="font-dk">Số điện thoại*</p>
                        <input class="input-l" type="number" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn" onkeyup="check_phone()">
                    </div>
                    <!--hết sdt-->
                    <!--mật khẩu-->
                    <div class="item-dk">
                        <p class="font-dk">Mật khẩu*</p>
                        <input class="input-l" type="password" id="pass" name="pass" placeholder="tối thiểu 6 ký tự" onkeyup="passw()">
                    </div>
                    <!--hết mật khẩu-->
                    <!--ngày sinh,gioi tính-->
                    <div class="item-dk" style="padding-top:16px;">
                        <!--ngay sinh-->
                        <div class="item-ns">
                            <p class="font-dk">Ngày sinh</p>
                            <select style="color: rgb(94, 94, 94);" name="thang" id="thang" class="input-ns" onchange="day_func()">
                                <option class="" value="">tháng</option>
                            </select>
                            <select style="color: rgb(94, 94, 94); width: 60px" name="ngay" id="ngay" class="input-ns">
                            </select>
                            <select style="color: rgb(94, 94, 94);" name="nam" id="nam" class="input-ns">
                            </select>
                        </div>
                        <!--hết ngay sinh-->
                        <!--giới tính-->
                        <div class="item-gt">
                            <p class="font-dk">Giới tính</p>
                            <select class="gt font-dk" name="gt" id="sex">
                                <option checked>Chọn</option>
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <!--het ngày sinh,giới tính-->
                </div>
                <!--het trai-->
                <!--giua-->
                <div class="dangky1" align="left">
                    <!--ten-->
                    <div class="item-dk">
                        <p class="font-dk">Họ tên*</p>
                        <input type="text" class="input-l" id="hoten" placeholder="Họ tên" name="hoten" onkeyup="ht()">
                    </div>
                    <!--het tên-->
                    <!--email-->
                    <div class="item-dk">
                        <p class="font-dk">Địa chỉ Email*</p>
                        <input type="text" style="border: rgb(193, 193, 193) solid 1px;" class="input-l" id="email" placeholder="Vui lòng nhập email" name="email" onkeyup="mail()">
                    </div>
                    <!--het email-->
                    <!--dang ky-->
                    <div class="item-dk" style="margin-top: 0 ;">
                        <div>
                            <input type="checkbox" value="on" id="checkbox" name="dieukhoan">
                            <span class="font-dk" style="padding-bottom:5px;display:inline-block;">Tôi đã đồng ý với chính sách bảo mật</span><br>
                        </div>
                        <div>
                            <button class="submit-dk" type="submit" onclick="dk()">đăng ký</button>
                        </div>
                    </div>
                </div>
                <!--het giua-->
                <!--phai-->
                <div class="dangky1" align="left">
                    <div class="item-dk">
                        <p class="font-dk">Hoặc đăng ký với:</p>
                    </div>
                    <div class="item-dk">
                        <input class="dk-fb" type="button" name="dk-fb" value="FACEBOOK">
                    </div>
                    <div class="item-dk">
                        <input class="dk-g" type="button" name="dk-g" value="GOOGLE">
                    </div>
                </div>
                <!--phai-->
            </div>
            <!--end dang ký-->
        </div>
        <!-- END phần khung chứa tất cả sản phẩm và tiêu đề -->
    </div>
    <!--END wrapper-->
    <!--FOOTER-->
    <div class="footer clear_both">
        <div class="about">
            <h3>ABOUT US</h3>
            <p>Home</p>
            <p>Đăng nhập</p>
            <p>Đăng ký</p>
        </div>
        <div id="lien-he" class="lien-he">
            <h3>THÔNG TIN LIÊN HỆ</h3>
            <a href="https://www.facebook.com/manhklove1">Facebook</a>
            <a href="#">Intagram</a>
            <a href="#">Twitch</a>
            <a href="mailto:khacmanh.infogmail.com">Send Mail</a>
            <p>...</p>
            <p>SĐT: </p>
            <p>0865983826</p>
        </div>
        <div class="orther">
            <p>Hy vọng bạn thích dịch vụ của chúng tôi !</p>
            <p style="margin-top:10px;"><a style="color:gray;font-weight:bold;" href="admin/index.php">Quản Trị Web</a></p>
            <img src="image/worldphone_logo.png" style="width: 304px;" alt="">
        </div>
        <div class="copyright">&copy; WORLD PHONE 2020</div>
    </div>
    <!-- END FOOTER-->
    <!--thông báo đăng nhập-->
    <div id="thong-bao-dang-nhap">
        <p style="color: white;font-size:30px;padding-bottom:30px">Bạn có muốn đăng nhập để tiếp tục mua sắm??</p>
        <button type="button" id="yes">Đăng nhập</button>
        <button type="button" id="no">Không</button>
    </div>
    <!--end thông báo đăng nhập-->
    <!-- thong tin khach hang -->
    <div class="thong_tin_khach_hang">
        <div class="btn_x">&times</div>
        <div class="content">
            <div class="user"></div>
            <div class="ho_ten"></div>
            <div class="email"></div>
            <div class="gioi_tinh"></div>
            <div class="ngay_sinh"></div>
            <div class="sdt"></div>
        </div>
    </div>
    <!-- end thong tin khach hang -->
    <!--scroll to top-->
    <div class="scroll_to_top">
        <div class="scroll_btn"></div>
    </div>

    

<script src="js\all.js"></script> 
  
   
</body>

</html>
