
<?php 
session_start(); 
?>

<html lang="zh_TW">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="csmart">
    <meta name="author" content="Cuzroom">
    <link rel="icon" href="../../../../favicon.ico">
    <title>學生資料管理系統</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" name="form" method="post" action="php/userlogin.php">
      <img class="mb-4" src="img/userindex.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">學生資料管理系統</h1>
      <input type="text" name="username" id="inputEmail" class="form-control" placeholder="帳號(學號)" required autofocus>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密碼" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
    </form>
  </body>
</html>

