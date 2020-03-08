![](https://github.com/p17johnny/NUTC_TEACHWEB2020/raw/master//intro.png)


# 2020 中科資管Mysql教學


Author: 陳繹仁

範例連結: https://rensv.synology.me

---
## 目錄

1-1 : [SQL Server Connection](#Connection)<br>
1-2 : [SQL 通用快速呼叫方式](#Function)<br>
1-3 : [SQL Create - 新增](#Create)<br>
1-4 : [SQL Read - 讀取](#Read)<br>
1-5 : [SQL Update - 更新](#Update)<br>
1-6 : [SQL Delete - 刪除](#Delete)<br>
1-7 : [表單送出](#FormPost)<br>
1-8 : [取得連結中的值](#Get)<br>

<div id="Connection"></div>

## - SQL Server Connection
``` php
<?php 
	
	$config_set['db_connection']['dsn'] = 'mysql:dbname=資料庫名稱;host=localhost;chartset=utf8';
	$config_set['db_connection']['user_name'] = '輸入你的帳號';
	$config_set['db_connection']['password'] ='輸入你的密碼';
	
	$dbh = new PDO(
		$config_set['db_connection']['dsn'],
		$config_set['db_connection']['user_name'],
		$config_set['db_connection']['password'],
		array(
			PDO::ATTR_EMULATE_PREPARES => false,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			)
	);

?>
```

---
<div id="Function"></div>

## - Function 快速執行

``` php
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "帳號", "密碼", "資料庫");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
```

---
<div id="Create"></div>

## - SQL Create 新增

```

```

---
<div id="Read"></div>

## - SQL Read 讀取


 - 多行讀取
``` php
$query = "SELECT * FROM `classtable`" ;
                        
$result = filterTable($query);

while($row = mysqli_fetch_array($result)):
    echo $row['欄位名'];
endwhile;
```

 - 單列讀取

``` php
$query = "SELECT * FROM `classtable`" ;
                        
$result = filterTable($query);

$row = mysqli_fetch_array($result);

echo $row['欄位名'];

endwhile;
```


---
<div id="Update"></div>

## - SQL Update 更新

``` php
    $sql = "UPDATE `classtable` set `name` = '".$_POST['name']."', `gender` = '".$_POST['gender']."' where `id` ='" . $target . "'";
    $result = filterTable($sql);
```

---
<div id="Delete"></div>

## - SQL Delete 刪除

``` php
    $sqli = "DELETE FROM `classtable` WHERE `id` ='" . $target . "'";
    $result = filterTable($sqli);
```
---
<div id="FormPost"></div>

## - Form Post 行為

``` html
    <form name="form" method="post" action="php/userlogin.php">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">送出</button>
    </form>
```

``` php
    $schoolid= $_POST['username']; // 對應 input 的值 name="username"
	$passtr= $_POST['password']; // 對應 input 的值 name="password"
	
	$query = "SELECT * FROM `classtable` Where `id` ='" . $schoolid . "' AND `password` = '".$passstr."'";
	$result = filterTable($query);
    $row = mysqli_fetch_array($result);  
    // $row 輸出的會是找到的資料 若帳號或密碼錯誤則為 null
```

---
<div id="GET"></div>

## - GET 行為
``` html
    <a href="link1.php?name=helloworld"> 連結1 </a>
    <a href="link2.php?id=1110331040"> 連結2 </a>
```

 - link1.php
```php
    $getparams = $_GET['name'];
    //$getparams = "helloworld"
```

- link2.php
```php
    $getparams = $_GET['id'];
    //$getparams = "1110331040"
```