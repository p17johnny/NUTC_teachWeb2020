<?php
include "php/db_connection.php";
session_start();
$userid = $_SESSION['username'];
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "user", "abc123", "smart");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openurl(link) {';
    echo '  if (confirm("確定刪除？")) {';
    echo '    document.location = link;';
    echo '  }';
    echo '}';
    echo '</script>';
}

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
    <link href="css/all.css" rel="stylesheet">
    <?php
        createConfirmationmbox();
    ?>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="#">學生資料管理系統</a> <button aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarsExample03" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarsExample03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">主選單 <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="php/logout.php">登出</a>
				</li>
			</ul>
            <h5 style="color:white;"> 歡迎回來 <?php echo $userid ?></h5>
		</div>
	</nav>
	<main role="main">
		<div class="jumbotron">
			<div class="col-sm-8 mx-auto">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">學號</th>
							<th scope="col">姓名</th>
                            <th scope="col">性別</th>
							<th scope="col">編輯</th>
							<th scope="col">刪除</th>
						</tr>
					</thead>
					<tbody>
						<?php
                            
                            $query = "SELECT * FROM `classtable`" ;
                        
                            $result = filterTable($query);

                            while($row = mysqli_fetch_array($result)):

                            echo "<tr><th scope='col'>";
                            echo $row['id'];
                            echo "<th scope='col'>";
                            echo $row['name'];
                            echo "</th>";
                            echo "<th scope='col'>";
                            echo $row['gender'];
                            echo "</th>";

                            
                            echo "<th scope='col'>";
                            echo "<a href='edit.php?edit=".$row['id']."'>";
                            echo "<i class='fas fa-edit'></i>";
                            echo "</a></th>";
                            
                            echo "<th scope='col'>";
                            $url = "php/delete.php?name=".$row['id'];
                            $link = 'javascript:openurl("'.$url.'")';
                            echo "<a href='".$link."'>";
                            
                            echo "<i class='fas fa-trash-alt'></i>";
                            echo "</a></th>";

                            endwhile; 
                        ?>
					</tbody>
				</table>
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