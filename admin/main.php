<?php
session_start();
if(!$_SESSION['admin']) die ("Доступ закрыт");
?>

<!DOCTYPE html>
<html>
<head>
<?
require_once("../functions/functions.php");
$title = "ПанельАдминистратора";
require_once("../blocks/head.php");
?>
</head>
<body>
<div class="header">
 <h1>ПанельАдминистратора</h1>
 <ul class="nav nav-tabs" role="tablist">
  <li><a href="../index.php">Перейти на сайт</a></li>
  <li><a href="../admin/main.php">Перейти в панель</a></li>
  <li><a href="../admin/add.php">Добавить статью</a></li>
  <li><a href="../admin/edit.php">Редактировать статью</a></li>
</ul>
 </div>

<br>
<? require_once("../blocks/footer.php")  ?>
</body>
</html>
