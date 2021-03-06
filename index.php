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
    <link rel="stylesheet" href="css/tim_kiem_nang_cao.css">
    <link rel="stylesheet" href="css/thong_tin_khach_hang.css">

    <link href="css/style.css" rel="stylesheet">
</head>


<body onload="trang_chinh()">
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
                    <div class="title_tim_nang_cao" onclick="window.location.href='index.php?search=xxx&-1&-1'">TÌM KIẾM NÂNG CAO</div>
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
                    <a id="home" href="index.php">HOME</a>
                    <a id="login" href="login.php">ĐĂNG NHẬP</a>
                    <a id="dang_ky" href="dang_ky.php">ĐĂNG KÝ</a>
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
                <!--
                    <div class="btn_arrow btn_a_l"></div>
                    <div class="btn_arrow btn_a_r"></div>
                    -->
                <div class="dots">
                    <span class="dot" onclick="show_slide_index(0)"></span>
                    <span class="dot" onclick="show_slide_index(1)"></span>
                    <span class="dot" onclick="show_slide_index(2)"></span>
                    <span class="dot" onclick="show_slide_index(3)"></span>
                </div>
                <div class="sm_banner_2">
                    <img style="width:390px" src="image/banner/5.png" alt="">
                    <img style="width:390px;margin-left:6px" src="image/banner/6.png" alt="">
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
                <span class="small_txt">SẢN PHẨM NỔI BẬT</span>
                <hr class="long_hr">
                <span class="big_txt">FEATURED ITEMS</span>
            </div>
            <!-- END phần tiêu đề của khung -->
            <!--khung tim kiem-->
            <div class="thanh_tim_kiem_nang_cao">
                <span style="text-align: left;float: left">TÌM KIẾM NÂNG CAO:</span>
                <input type="text" name="noi_dung_tknc" id="noi_dung_tknc" placeholder="Tìm theo tên sản phẩm">
                <div class="gia_tien">
                    GIÁ TIỀN:
                    <!--onchange="search_gia(this)"-->
                    <select id="gia_id">
                        <option value="-1">TẤT CẢ</option>
                        <option value="10">1.000.000 - 10.000.000</option>
                        <option value="50">10.000.000 - 50.000.000</option>
                        <option value="100">50.000.000 - 100.000.000</option>
                    </select>
                </div>
                <div class="loai">
                    LOẠI:
                    <select id="loai_id">
                        <option value="-1">TẤT CẢ</option>
                        <option value="0">Điện thoại</option>
                        <option value="1">Laptop</option>
                        <option value="2">Máy ảnh</option>
                        <option value="3">Máy tính bảng</option>
                        <option value="4">Phụ kiện</option>
                    </select>
                </div>
                <input type="button" class="sub_tknc" value="Tìm" onclick="tim_kiem_nang_cao()">
            </div>
            <!--end khung tim kiem-->
            <!-- phần khung dùng để thêm sản phẩm bằng JS-->
            <div class="list_sp"></div>
            <!-- phần tiêu đề của khung -->
            <div class="khung_sp_header">
                <hr class="small_hr">
                <span class="small_txt">SẢN PHẨM BÁN CHẠY</span>
                <hr class="long_hr">
                <span class="big_txt">BEST SELLERS</span>
            </div>
            <!-- END phần tiêu đề của khung -->
            <!-- phần khung dùng để thêm sản phẩm bằng JS-->
            <div class="list_sp"></div>
            <!--phần khung dùng để chứa số trang-->
            <div class="chuyen_trang clear_both"></div>
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
    <!--thông báo đăng nhập-->
    <div id="thong-bao-dang-nhap">
        <p style="color: white;font-size:30px;padding-bottom:30px">Bạn có muốn đăng nhập để tiếp tục mua sắm??</p>
        <button type="button" id="yes">Đăng nhập</button>
        <button type="button" id="no">Không</button>
    </div>
    <!--end thông báo đăng nhập-->
    <!--scroll to top-->
    <div class="scroll_to_top">
        <div class="scroll_btn"></div>
    </div>
    <!--end scroll to top-->
    <script src="js/all.js"></script>
</body>

</html>
