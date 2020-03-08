<?php
    require "db_connection.php";

    if(isset($_POST['newTask'])){
        //echo "newtask";
        $sql="INSERT INTO `todo`(`content`) VALUES ('".$_POST['content']."')";
        filterTable($sql);
        echo "<script language='javascript'>";
        echo "location.href = '../index.php';";
        echo "</script>";
    }

    if(isset($_GET['deleteTask'])){
        $sql="DELETE FROM `todo` WHERE `id` =  '".$_GET['deleteTask']."'";
        filterTable($sql);
        echo "<script language='javascript'>";
        echo "location.href = '../index.php';";
        echo "</script>";
    }

    if(isset($_POST['editTask'])){
        echo "aaa";
        echo $_POST['content'];
        echo $_POST['id'];
        $sql="UPDATE `todo` SET `content`='".$_POST['content']."' WHERE `id` = '".$_POST['editTask']."'";
        filterTable($sql);
        echo "<script language='javascript'>";
        echo "location.href = '../index.php';";
        echo "</script>";
    }

?>