<?php 
 	session_start();
    include_once '../config/connect.php';
 
	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];

		$sql = "DELETE FROM tbl_user WHERE id = $id";
		$del = mysqli_query($conn, $sql);
		if ($del) {
			header("Location: qluser.php");
		}else{
			echo "<script>alert('Xóa thất bại!');</script>";
			header("Location: qluser.php");
		}
	}

?>