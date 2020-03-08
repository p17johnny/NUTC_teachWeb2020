<?php
session_start();

include "php/db_connection.php";
$userid = $_SESSION['username'];
$target = $_GET['name'];


?>
<html>
<head>
    <meta charset="utf-8">
  <title></title>
</head>
<body>
     <?php
            $sqli = "DELETE FROM `classtable` WHERE `id` ='" . $target . "'";
            $result = filterTable($sqli);
            echo "<script language='javascript'>";
            echo "alert('".$target."的學生資訊已刪除'); location.href = '../class.php';";
            echo "</script>";

?>
</body>
</html>