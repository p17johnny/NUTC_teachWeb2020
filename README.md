![](https://github.com/p17johnny/NUTC_TEACHWEB2020/raw/master//intro.png)


# 2020 台中科技大學 資管四甲 MySQL,PHP淺教學


Author: 陳繹仁

 - 第一節範例連結
   - https://rensv.synology.me/nutc_teachweb2020/class1/

 - 第二節範例連結
 
   - https://rensv.synology.me/nutc_teachweb2020/class2/

   - `範例登入帳號：1110330140 密碼：abc123`

---
## 目錄

 - 第一節

    1-1 : [SQL Server Connection](#Connection)<br>
    1-2 : [SQL 通用快速呼叫方式](#Function)<br>
    1-3 : [SQL Create - 新增](#Create)<br>
    1-4 : [SQL Read - 讀取](#Read)<br>
    1-5 : [SQL Update - 更新](#Update)<br>
    1-6 : [SQL Delete - 刪除](#Delete)<br>
    1-7 : [表單送出](#FormPost)<br>
    1-8 : [取得連結中的值](#Get)<br>

 - 第二節
    
    尚未完成

<div id="Connection"></div>

## - SQL Server Connection 測試server是否可連線
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
        $dbType   = 'MySQL';
        $host     = 'localhost';
        $dbName   = '資料庫名稱';
        $userName = '帳號';
        $pwd      = '密碼';
        
        $dbh = mysqli_connect($host, $userName, $pwd, $dbName) or die("Error " . mysqli_error($dbh));
        //$dbh = mysqli_connect($host, $userName, $pwd, $dbName);
        mysqli_query($dbh, "SET NAMES 'utf8'");
        $filter_Result = mysqli_query($dbh, $query);
        return $filter_Result;
    }
```

---
<div id="Create"></div>

## - SQL Create 新增

```php
//將form post過來的值新增至todo資料表
    $sql="INSERT INTO `todo`(`content`) VALUES ('".$_POST['content']."')";
    filterTable($sql);

```

---
<div id="Read"></div>

## - SQL Read 讀取


 - 多行讀取
``` php
    $sql = "SELECT * FROM `todo`" ;
                            
    $result = filterTable($sql);

    while($row = mysqli_fetch_array($result)):
        //執行你要做的事情
        echo $row['欄位名']
    endwhile;
```

 - 單列讀取

``` php
    $query = "SELECT * FROM `todo`" ;
                            
    $result = filterTable($query);

    $row = mysqli_fetch_array($result);

    echo $row['欄位名'];
```


---
<div id="Update"></div>

## - SQL Update 更新

``` php
//將POST過來的content覆蓋於id為editTask的值
    $sql="UPDATE `todo` SET `content`='".$_POST['content']."' WHERE `id` = '".$_POST['editTask']."'";
    filterTable($sql);
```

---
<div id="Delete"></div>

## - SQL Delete 刪除

``` php
//將連結上的deleteTask擷取 並刪除資料庫中與此ID相符的資料列
    $sql="DELETE FROM `todo` WHERE `id` =  '".$_GET['deleteTask']."'";
    filterTable($sql);
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