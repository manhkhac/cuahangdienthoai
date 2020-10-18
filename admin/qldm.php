<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/qldm.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<span class="title-header">ADMIN AREA</span>
				<div class="nav-right">
					<img src="image/icon/user-icon.svg">
					<div class="ten-admin">Thanh - </div>
					<a href="index.php"><div style="font-size: 15px;margin:17px 8px 0 8px">Đăng Xuất</div></a>
				</div>
			</div>
			<div class="left-menu">
				<a class="left-menu__item" href="admin.php"><span id="speed-icon"></span>Thống kê</a>
				<a class="left-menu__item" href="qlsp.php"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
				<a class="left-menu__item" href="qluser.php"><span class="icon" id="user-icon"></span>Quản lý User</a>
				<a class="left-menu__item" href="qldh.php"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
				<a class="left-menu__item active" href="qldm.php"><span class="icon" id="danh-muc-icon"></span>Quản lý danh mục</a>
				<div class="copyright">&copy World Phone 2018</div>
			</div>
			<div class="main">
				<div class="breadcrumb">
					<span><a href="../index.php">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý danh mục</span>
				</div>
				<div class="section">
				<div class="them-sp" onclick="popup_themsp()"><button>Thêm Danh Mục</button></div>
				<table id="table-dm">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên Danh Mục</th>
							<th>Thứ Tự</th>
							<th>Hiển Thị</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
				<!-- 		<tr>
							<td>1</td>
							<td>Dien thoai</td>
							<td>1</td>
							<td>Hiện</td>
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
            <div class="popup-themsp__title">Thêm Danh Mục</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">Nhập Tên</div>
                <div class="popup-themsp-left__label">Nhập Thứ Tự</div>
                <div class="popup-themsp-left__label">Hiển Thị</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="them-ten them-danh-muc" type="text" placeholder="Tên danh mục"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-danh-muc" type="text" placeholder="Thứ tự danh mục"></div>
                <div class="popup-themsp-left__input">
                	<select  width="30" class="hien-thi them-danh-muc">
                		<option>on</option>
                		<option>off</option>
                	</select>
                </div>
            </div>
            <button class="popup-themsp__btn" onclick="them_danh_muc()">Thêm</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
    <!-- popup sửa sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Sửa Danh Mục</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">STT</div>
                <div class="popup-themsp-left__label">Tên</div>
                <div class="popup-themsp-left__label">Thứ Tự</div>
                <div class="popup-themsp-left__label">Hiển Thị</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="stt sua-dm" type="text" placeholder="Tên danh mục"></div>
                <div class="popup-themsp-left__input"><input class="them-ten sua-dm" type="text" placeholder="Tên danh mục"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu sua-dm" type="text" placeholder="Thứ tự danh mục"></div>
                <div class="popup-themsp-left__input">
                	<select  width="30" class="hien-thi sua-dm">
                		<option>on</option>
                		<option>off</option>
                	</select>
                </div>
            </div>
            <button class="popup-themsp__btn" onclick="sua_danh_muc()">Sửa</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
            <div class="footer">
                <div>Powered by <a href="../index.php"> World Phone</a></div>
            </div>
		<script src="js/all.js"></script>
	</body>
</html>