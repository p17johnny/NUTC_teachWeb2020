<?php
include "php/db_connection.php";
session_start();
$targetid = $_GET['edit'];

$query = "SELECT * FROM `classtable` WHERE `id` ='".$targetid."'";
$result = filterTable($query);
$row = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="zh_TW">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title>學生資料管理系統</title><!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom styles for this template -->
	<link href="css/navbar.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="class.php">學生資料管理系統</a> <button aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarsExample03" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarsExample03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="class.php">主選單 </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="php/logout.php">登出</a>
				</li>
			</ul>
		</div>
	</nav>
	<main role="main">
		<div class="jumbotron">
			<div class="col-sm-8 mx-auto">
                <form class="form-signin" name="form" method="post" action="php/editsubmit.php">
                    <img class="mb-4" src="img/userindex.png" alt="" width="72" height="72" style="display:block; margin:auto;">
                    <h1 class="h3 mb-3 font-weight-normal text-center">編輯學生資料</h1>
                    <input type="text" name="id" id="id" class="form-control" placeholder="<?php echo $targetid ?> （選擇的帳號）" maxlength="10" value="<?php echo $targetid ?>" readonly><br>
                    <small class="form-text text-muted">
                    	姓名
                    </small><p style="margin-bottom:-3px;"></p>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'] ?>" required autofocus style="margin-bottom:20px;" maxlength="4">
                    
					<small class="form-text text-muted">
                    	性別
                    </small><p style="margin-bottom:-3px;"></p>
					<input type="text" name="gender" id="gender" class="form-control" value="<?php echo $row['gender'] ?>" required autofocus style="margin-bottom:20px;" maxlength="2">
                
                    <button class="btn btn-lg btn-primary btn-block" type="submit">送出</button>
                </form>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script>
	window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
	</script> 
	<script src="js/popper.min.js">
	</script> 
	<script src="js/bootstrap.min.js">
	</script>
</body>
</html>