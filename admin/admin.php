<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="font/css/all.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <span class="title-header">ADMIN AREA</span>
                <div class="nav-right">
                    <img src="image/icon/user-icon.svg">
                    <div class="ten-admin"><?php 
                            if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                            } 
                        ?>  - </div>
                    <a href="logout.php">
                        <div style="font-size: 15px;margin:17px 8px 0 8px">Đăng Xuất</div>
                    </a>
                </div>
            </div>
            <div class="left-menu">
                <a class="left-menu__item active" href="#"><span id="speed-icon"></span>Thống kê</a>
                <a class="left-menu__item" href="qlsp.php"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
                <a class="left-menu__item" href="qluser.php"><span class="icon" id="user-icon"></span>Quản lý User</a>
                <a class="left-menu__item" href="qldh.php"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
                <a class="left-menu__item" href="qldm.php"><span class="icon" id="danh-muc-icon"></span>Quản lý danh mục</a>
                <div class="copyright">&copy World Phone 2020</div>
            </div>
            <div class="main">
                <div class="breadcrumb">
                    <span><a href="../index.php">Home</a></span>
                    <span> / </span><span>Admin</span><span> / </span><span>Thống kê</span>
                </div>
                <div class="chart chart-bgred">
                    <div class="chart__num">12.558</div>
                    <div class="chart__label">Người Truy Cập</div>
                    <div class="chart__img chart__img-img1"></div>
                </div>
                <div class="chart chart-bgblue">
                    <div class="chart__num">9.823</div>
                    <div class="chart__label">Sản Phẩm Đã Bán</div>
                    <div class="chart__img chart__img-img2"></div>
                </div>
                <div class="chart chart-bgbluewhite">
                    <div class="chart__num">5.423</div>
                    <div class="chart__label">Khách Hàng</div>
                    <div class="chart__img chart__img-img3"></div>
                </div>
                <div class="chart chart-bgyellow">
                    <div class="chart__num">7.000.256.000 VNĐ</div>
                    <div class="chart__label">Doanh Thu</div>
                    <div class="chart__img chart__img-img4"></div>
                </div>
                <div class="section">
                    <div class="top-user__header">TOP USER 2020</div>
                    <table id="top-user__table">
                        <thead>
                            <tr>
                                <th><i class="far fa-user"></i></th>
                                <th>Họ Tên</th>
                                <th>Top</th>
                                <th>Email</th>
                                <th>Sản Phẩm Đã Mua</th>
                                <th>Thanh Toán</th>
                                <th>Tổng Giá Trị</th>
                                <th>Lượt Truy Cập</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="top-user__img" src="image/user1.jpg" height="40"></td>
                                <td>
                                    <span>Nguyễn An Ninh</span>
                                    <label>VIP | Tháng 8 2016</label>
                                </td>
                                <td>1</td>
                                <td>
                                    <span>ninhnguyen375</span>
                                    <label>@gmail.com</label>
                                </td>
                                <td>
                                    <span>22.265</span>
                                    <label>Sản Phẩm</label>
                                </td>
                                <td><i class="fab fa-cc-mastercard" style="font-size: 28px"></i></td>
                                <td>
                                    <span>220.265.250</span>
                                    <label>VND</label>
                                </td>
                                <td>
                                    <span>55.658</span>
                                    <label>12 lần / ngày</label>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="top-user__img" src="image/user2.jpg" height="40"></td>
                                <td>
                                    <span>Phạm Phương Thanh</span>
                                    <label>VIP | Tháng 8 2016</label>
                                </td>
                                <td>2</td>
                                <td>
                                    <span>thanhpham456</span>
                                    <label>@gmail.com</label>
                                </td>
                                <td>
                                    <span>22.265</span>
                                    <label>Sản Phẩm</label>
                                </td>
                                <td><i class="fab fa-cc-visa" style="font-size: 28px"></i></td>
                                <td>
                                    <span>220.265.250</span>
                                    <label>VND</label>
                                </td>
                                <td>
                                    <span>55.658</span>
                                    <label>12 lần / ngày</label>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="top-user__img" src="image/user3.jpg" height="40"></td>
                                <td>
                                    <span>Huỳnh Khương Ninh</span>
                                    <label>VIP | Tháng 8 2016</label>
                                </td>
                                <td>3</td>
                                <td>
                                    <span>ninhkhuong375</span>
                                    <label>@gmail.com</label>
                                </td>
                                <td>
                                    <span>22.265</span>
                                    <label>Sản Phẩm</label>
                                </td>
                                <td><i class="fab fa-paypal" style="font-size: 28px"></i></td>
                                <td>
                                    <span>220.265.250</span>
                                    <label>VND</label>
                                </td>
                                <td>
                                    <span>55.658</span>
                                    <label>12 lần / ngày</label>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="top-user__img" src="image/user4.jpg" height="40"></td>
                                <td>
                                    <span>Đào Bá Tước</span>
                                    <label>VIP | Tháng 8 2016</label>
                                </td>
                                <td>4</td>
                                <td>
                                    <span>batuoc778</span>
                                    <label>@gmail.com</label>
                                </td>
                                <td>
                                    <span>20.265</span>
                                    <label>Sản Phẩm</label>
                                </td>
                                <td><i class="fab fa-cc-visa" style="font-size: 28px"></i></td>
                                <td>
                                    <span>120.265.250</span>
                                    <label>VND</label>
                                </td>
                                <td>
                                    <span>25.658</span>
                                    <label>12 lần / ngày</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="qlsp.php"><div class="thong-ke">
                    <div class="thong-ke__num">55.222</div>
                    <div class="thong-ke__title">Tổng Sản Phẩm</div>
                    <div class="thong-ke__img img1"></div>
                </div></a>
                <a href="qluser.php"><div class="thong-ke">
                    <div class="thong-ke__num">11.513</div>
                    <div class="thong-ke__title">Khách Hàng</div>
                    <div class="thong-ke__img img2"></div>
                </div></a>
                <a href="qldh.php"><div class="thong-ke">
                    <div class="thong-ke__num">11.513</div>
                    <div class="thong-ke__title">Đơn Hàng</div>
                    <div class="thong-ke__img img3"></div>
                </div></a>
                <a href="qldm.php"><div class="thong-ke">
                    <div class="thong-ke__num">6</div>
                    <div class="thong-ke__title">Danh Mục SP</div>
                    <div class="thong-ke__img img4"></div>
                </div></a>
            </div>
            <div class="footer">
                <div>Powered by <a href="../index.php"> World Phone</a></div>
            </div>
        </div>
        <script src="js/all.js"></script>
    </body>
</html>