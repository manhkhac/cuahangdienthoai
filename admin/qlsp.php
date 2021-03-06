<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/qlsp.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <span class="title-header">ADMIN AREA</span>
            <div class="nav-right">
                <img src="image/icon/user-icon.svg">
                <div class="ten-admin">Admin - </div>
                <a href="index.php"><div style="font-size: 15px;margin:17px 8px 0 8px">Đăng Xuất</div></a>
            </div>
        </div>
        <div class="left-menu">
            <a class="left-menu__item" href="admin.php"><span id="speed-icon"></span>Thống kê</a>
            <a class="left-menu__item active" href="qlsp.php"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
            <a class="left-menu__item" href="qluser.php"><span class="icon" id="user-icon"></span>Quản lý User</a>
            <a class="left-menu__item" href="qldh.php"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
            <a class="left-menu__item" href="qldm.php"><span class="icon" id="danh-muc-icon"></span>Quản lý danh mục</a>
            <div class="copyright">&copy World Phone 2020</div>
        </div>
        <div class="main">
            <div class="breadcrumb">
                <span><a href="../index.php">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý sản phẩm</span>
            </div>
            <div class="section">
                <div class="them-sp"><button onclick="popup_themsp()">Thêm Sản Phẩm</button></div>
                <table id="table-sp">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Loại</th>
                            <th>Mã</th>
                            <th>Hiển Thị</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                                <td>1</td>
                                <td><img src="../image/phone/huawei-mate-20-black-400x400.jpg" width="110px"></td>
                                <td>adf sadj ád kjafd</td>
                                <td>10.1520.1211vnd</td>
                                <td>Dien thoai</td>
                                <td>515131</td>
                                <td>hiện</td>
                                <td>
                                    <button class="xoa_sp">Xoá</button><br>
                                    <button class="sua_sp">Sửa</button>
                                </td>
                            </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- popup thêm sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Thêm Sản Phẩm</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">Nhập Tên</div>
                <div class="popup-themsp-left__label">Nhập Giá</div>
                <div class="popup-themsp-left__label">Nhập Mã</div>
                <div class="popup-themsp-left__label">Chọn Hình</div>
                <div class="popup-themsp-left__label">Nhập Loại</div>
                <div class="popup-themsp-left__label">Hiển Thị</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="them-ten them-mot-sp" type="text" placeholder="Tên sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-gia them-mot-sp" type="text" placeholder="Giá sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-mot-sp" type="text" placeholder="Mã sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh them-mot-sp" type="file"></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" placeholder="Loại sản phẩm"></div>
                <div class="popup-themsp-left__input">
                    <select  width="30" class="them-mot-sp">
                        <option>on</option>
                        <option>off</option>
                    </select>
                </div>
            </div>
            <button class="popup-themsp__btn" onclick="them_mot_sp()">Thêm</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
    <!-- popup sửa sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Sửa Sản Phẩm</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">STT</div>
                <div class="popup-themsp-left__label">Tên</div>
                <div class="popup-themsp-left__label">Giá</div>
                <div class="popup-themsp-left__label">Mã</div>
                <div class="popup-themsp-left__label">Hình</div>
                <div class="popup-themsp-left__label">Loại</div>
                <div class="popup-themsp-left__label">Hiển Thị</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="them-stt sua-sp" type="text" placeholder="Tên sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-ten sua-sp" type="text" placeholder="Tên sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-gia sua-sp" type="text" placeholder="Giá sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu sua-sp" type="text" placeholder="Thứ tự"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh sua-sp" type="file"></div>
                <div class="popup-themsp-left__input"><input class="them-loai sua-sp" type="text" placeholder="Loại sản phẩm"></div>
                <div class="popup-themsp-left__input">
                    <select  width="30" class="sua-sp">
                        <option>on</option>
                        <option>off</option>
                    </select>
                </div>
            </div>
            <button class="popup-themsp__btn" onclick="sua_thong_tin_sp()">Sửa</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
            <img src="image/img-01.png" class="sua-hinh" width="185">
        </div>
    </div>
            <div class="footer">
                <div>Powered by <a href="../index.php"> World Phone</a></div>
            </div>
    <script src="js/all.js"></script>
</body>

</html>