<?php
session_start();

include "db_connection.php";
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "user", "abc123", "smart");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

$target = $_POST['id'];

?>
<html>
<head>
    <meta charset="utf-8">
  <title></title>

</head>
<body>
     <?php  

            $sql = "UPDATE `classtable` set `name` = '".$_POST['name']."', `gender` = '".$_POST['gender']."' where `id` ='" . $target . "'";
            $result = filterTable($sql);

            if($result){
                echo "<script language='javascript'>";
                echo "alert('編輯成功'); location.href = '../class.php';";
                echo "</script>";
            }else{
                echo "<script language='javascript'>";
                echo "alert('編輯失敗（未知原因）'); location.href = '../class.php';";
                echo "</script>";
            }
?>
</body>
</html>