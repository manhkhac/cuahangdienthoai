<?php 
     //session_start();
    include_once '../config/connect.php';

    // if (!isset($_SESSION['id'])) {
    //     header('Location: index.php');
    // }
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/qluser.css">
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
				<a class="left-menu__item" href="qlsp.php"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
				<a class="left-menu__item active" href="qluser.php"><span class="icon" id="user-icon"></span>Quản lý User</a>
				<a class="left-menu__item" href="qldh.php"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
				<a class="left-menu__item" href="qldm.php"><span class="icon" id="danh-muc-icon"></span>Quản lý danh mục</a>
				<div class="copyright">&copy World Phone 2020</div>
			</div>
			<div class="main">
				<div class="breadcrumb">
					<span><a href="../index.php">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý User</span>
				</div>
            <div class="section">
                <div class="them-sp" onclick="popup_themsp()"><button>Thêm User</button></div>
                <table id="table-user">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ Tên</th>
                            <th>Địa Chỉ</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Giới Tính</th>
                            <th>Ngày Sinh</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                   <!--  <tbody>
                        <?php
                            $sql = "SELECT *FROM tbl_user";
                            $query = mysqli_query($conn, $sql);
                            $stt = 0;
                            while ($array = mysqli_fetch_array($query)){
                            $stt += 1;
                        ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $array['name']; ?></td>
                            <td><?php echo $array['dia_chi']; ?></td>
                            <td><?php echo $array['sdt']; ?></td>
                            <td><?php echo $array['email']; ?></td>
                            <td><?php echo $array['gioi_tinh']; ?></td>
                            <td><?php echo $array['ngsinh']; ?></td>  
                            </td>
                        <td>
                            <a href="index.php?page=edit-member&sdt=<?php echo $row['sdt']; ?>">
                                <button >Sửa</button>
                            </a>
                            <a onclick="return confirm('Bạn có thực sự muốn xóa user này không?');" href="delete_user.php?id=<?php echo $array['id']; ?>">
                                <button >Xóa</button>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
                    </tbody> -->
                </table>
            </div>
            </div>
        </div>
            <div class="footer">
                <div>Powered by <a href="../index.php"> World Phone</a></div>
            </div>
    <!-- popup thêm sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Thêm Danh Mục</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">Tên</div>
                <div class="popup-themsp-left__label">Địa Chỉ</div>
                <div class="popup-themsp-left__label">SĐT</div>
                <div class="popup-themsp-left__label">Email</div>
                <div class="popup-themsp-left__label">Giới Tính</div>
                <div class="popup-themsp-left__label">Ngày Sinh</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="them-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="them-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="them-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="them-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="them-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="them-user" type="text"></div>
            </div>
            <button class="popup-themsp__btn" onclick="them_mot_user()">Thêm</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>

      

    </div>
    <!-- popup sửa sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Sửa User</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">STT</div>
                <div class="popup-themsp-left__label">Tên</div>
                <div class="popup-themsp-left__label">Địa Chỉ</div>
                <div class="popup-themsp-left__label">SĐT</div>
                <div class="popup-themsp-left__label">Email</div>
                <div class="popup-themsp-left__label">Giới Tính</div>
                <div class="popup-themsp-left__label">Ngày Sinh</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="sua-user" type="text" readonly=""></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
            </div>
            <button class="popup-themsp__btn" onclick="sua_thong_tin_user()">Sửa</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
        <script src="js/all.js"></script>
	</body>
</html>