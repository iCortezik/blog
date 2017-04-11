<?php
session_start();
if (!empty($_SESSION['admin']))
{
if ($_SESSION['admin'])
{
?>
<html>
<head>
<title>Административная панель </title>
</head>
<body>
<center>
<p>Вход выполнен</p>
<p><a href="main.php">Перейти к административной панели</a></p>
</center>
</body>
</html>
<?
exit;
}
}
$_SESSION['admin'] = false;
include ('config/config.php');
function not_logged_in()
{
echo '
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    </style>
</head>
<center>
<div class="container">

      <form class="form-signin" action="index.php" method="post">
        <h2 class="form-signin-heading">Пожалуйста авторизуйтесь</h2>
        <input type="text" class="input-block-level" placeholder="Login" name="login">
        <input type="text" class="input-block-level" placeholder="Password" name="password">
        <input type="submit" class="btn btn-large btn-primary" value="Войти">
      </form>

    </div>
</center>


';
exit;
}
if(!$_POST) not_logged_in();
if(!$_POST['login']) not_logged_in();
if(!$_POST['password']) not_logged_in();
if($_POST['login'] != $admlogin) not_logged_in();
if($_POST['password'] != $admpass) not_logged_in();
$_SESSION['admin'] = true;
?>
<html>
<head>
<title>Административная панель</title>
</head>
<body>
<center>
<p>Вход выполнен</p>
<p><a href="main.php">Перейти к административной панели</a></p>
</center>
</body>
</html>


<!-- 

<html>
<head>
<title>Административная панель</title>
</head>
<body>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center" id="wraptd">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Вход в административную панель</td></tr>
<tr><td class="loginbox2" align="center">
<form action="index.php" method="post">
<input type="text" name="login" value="Логин"><br>
<input type="text" name="password" value="Пароль"><br>
<input type="submit" value="Войти">
</form>
</td></tr>
</table>
</td></tr></table>
</center>
</body>
</html>

-->