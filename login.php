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
        <link href="css/login.css" rel="stylesheet">
        <link rel="stylesheet" href="css/thong_tin_khach_hang.css">
        <!--style.css have code responsive, so this only on bottom of list css -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body onload="login()">
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
                    <span class="small_txt">ĐĂNG NHẬP VỚI CHÚNG TÔI</span>
                    <hr class="long_hr">
                    <span class="big_txt">LOGIN NOW</span>
                </div>
                <!-- END phần tiêu đề của khung -->
                <!--form đăng nhập-->
                <form action="#" method="post">
                    <!--LOGIN-->
                    <div class="dangnhap">
                        <!--LOGIN trai-->
                        <div class="dangnhap-l">
                            <!--dangnhap-->
                            <DIV class="item-login">
                                <p class="font-login">Đăng nhập:</p>
                                <input id="dangnhap" class="login" type="text" placeholder="Email hoặc số điện thoại" onKeyUp="check()">
                                <p class="login-last" id="bk1">Hãy nhập đầy đủ thông tin!</p>
                            </DIV>
                            <!--het dangnhap-->
                            <!--mat khau-->
                            <div class="item-login">
                                <p class="font-login">Mật khẩu:</p>
                                <input class="login" id="matkhau" type="password" placeholder="Tối thiểu 6 ký tự" onKeyUp="check()">
                                <p class="login-last" id="bk2">Hãy nhập đầy đủ thông tin!</p>
                            </div>
                            <!--het mat khau-->
                            <!--quên mật khẩu-->
                            <div class="item-login" style="width: 300px" align="right"><a href="#" class="quenmk">
                                <p class=" quenmk">Quên mật khẩu?</p>
                            </a>
                        </div>
                        <!--het quên mật khẩu-->
                    </div>
                    <!--het LOGIN trai-->
                    <!--LOGIN phai-->
                    <div class="dangnhap-l" style="margin-top: 30px;">
                        <!-- login-->
                        <div class="item-login">
                            <input type="button" class="submit" name="submit" value="ĐĂNG NHẬP" onClick="sub()">
                            <P class="font-login">Hoặc đăng nhập bằng: </P>
                        </div>
                        <!--het login-->
                        <!--login fb-->
                        <div class="item-login">
                            <button type="button" class="login-fb" value="" name="login-fb">FACEBOOK</button>
                        </div>
                        <!--het login fb-->
                        <!--login gmail-->
                        <div class="item-login">
                            <input type="button" class="login-g" value="GOOLGE" name="login-g">
                        </div>
                        <!--het login gmail-->
                    </div>
                    <!--het LOGIN phai-->
                </div>
                <!--het LOGIN-->
            </form>
            <!--end form đăng nhập-->
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
    <!--end scroll to top-->
    <!--     <script type="text/javascript">
    function go_to_index() {
    var input_name = document.getElementById('input_name').value;
    window.location = 'index.php?6&0&account=' + input_name;
    }
    </script> -->
    <script>
    function check() {
    document.getElementById('bk1').style.display = 'block';
    document.getElementById('bk2').style.display = 'block';
    var tk = document.getElementById("dangnhap").value;
    var mk = document.getElementById("matkhau").value;
    if (tk == "") {
    document.getElementById('dangnhap').style.borderColor = 'red';
    } else {
    document.getElementById('bk1').style.display = 'none';
    document.getElementById('dangnhap').style.borderColor = 'rgb(186, 186, 186)';
    }
    if (mk == "" || mk.length < 6) {
    document.getElementById('matkhau').style.borderColor = 'red';
    } else {
    document.getElementById('bk2').style.display = 'none';
    document.getElementById('matkhau').style.borderColor = 'rgb(186, 186, 186)';
    }
    }
    function sub() {
    var tk = document.getElementById("dangnhap").value;
    var mk = document.getElementById("matkhau").value;
    if (tk == "" || mk == "") {
    alert("Vui lòng không bỏ trống các thông tin!");
    } else
    if (mk.length < 6) {
    alert('Mật khẩu phải trên 6 ký tự');
    } else {
    dang_nhap_fuc();
    }
    }
    </script>
    <script src="js\all.js"></script>
</body>
</html>