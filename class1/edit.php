<?php
include "php/db_connection.php";
$targetId = $_GET['taskId'];
$targetCont = $_GET['taskCont'];
?>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
</head>
<body>
    
    <button onclick="javascript:location.href='index.php'">返回新增</button>
    <form method="post" action="php/functions.php">
        修改編號 <?php echo $targetId; ?> 內容：
        <input type="text" name="content" value="<?php echo $targetCont; ?>" autofocus>
        <button name="editTask" value="<?php echo $targetId; ?>" type="submit">修改</button>
    </form>
    
    <table>
        <thead>
            <tr>
                <th>編號</th>
                <th>內容</th>
                <th>編輯</th>
                <th>刪除</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql="SELECT * FROM `todo`";
                $result = filterTable($sql);
                while($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "<th>".$row['id']."</th>";
                    echo "<td>".$row['content']."</td>";
                    echo "<td><a href='edit.php?taskId=".$row['id']."&taskCont=".$row['content']."'>編輯</a></td>";
                    echo "<td><a href='php/functions.php?deleteTask=".$row['id']."'>刪除</a></td>";
                    echo "</tr>";
                endwhile;
            ?>
        </tbody>
    </table>
</body>
</html>