<?php
	session_start();

	require_once('../../utils/utility.php');
	require_once('../../database/dbhelper.php');
	require_once('process_form_login.php');

	$user = getUserToken();
	if($user != null) {
		header('Location: ../');
		die();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../../anh_du_lich/logo.png" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSidc_Ky3a1unIURbYa_z33elCiaqwIxO91_UvV0VVZd7G-APQ9DPqbNtXpuXYZAs_omd4&usqp=CAU); background-size: cover; background-repeat: no-repeat;">
	<div class="container">
		<div class="panel panel-primary" style="width: 480px; margin: 0px auto; margin-top: 50px; background-color: white; padding: 10px; border-radius: 5px; box-shadow: 2px 2px #9ac9f5;">
			<div class="panel-heading">
				<h2 class="text-center">Đăng Nhập</h2>
				<h5 style="color: red;" class="text-center"><?=$msg?></h5>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>
					<div class="form-group">
					  <label for="pwd">Mật Khẩu:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
					</div>
					<button class="btn btn-success">Đăng Nhập</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>