<?php

include "db_connection.php";
session_start();

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "user", "abc123", "smart");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


	
	$schoolid= $_POST['username'];
	$passtr= $_POST['password'];
	
	$query = "SELECT * FROM `classtable` Where `id` ='" . $schoolid . "'";

	$result = filterTable($query);
	$row = mysqli_fetch_array($result);

	if ($row){

          if ($row['password']==$passtr)
            {
            $_SESSION['username'] = $schoolid;
              
            header('location:../class.php');

            }else{
                echo "<script language='javascript'>";
                echo "alert('密碼錯誤'); location.href = '../index.php';";
                echo "</script>";
            }
     }else{
            echo "<script language='javascript'>";
            echo "alert('無此帳號'); location.href = '../index.php';";
            echo "</script>";
	 }
?>