<?php
session_start();
if(!$_SESSION['admin']) die ("Доступ закрыт");
?>
<!DOCTYPE html>
<html>
<head>

<?
require_once("../functions/functions.php");

$news = getArticle(5, $_GET["id"]);
$title = "Главная страница";
require_once("../blocks/head.php"); 

?>
</head>
<body>
<div class="header">
 <h1>Логотип</h1>
 <ul class="nav nav-tabs" role="tablist">
  <li><a href="../index.php">Перейти на сайт</a></li>
  <li><a href="../admin/main.php">Перейти в панель</a></li>
  <li><a href="../admin/add.php">Добавить статью</a></li>
  <li><a href="../admin/edit.php">Редактировать статью</a></li>
</ul>
 </div>
<br>
    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
<?php 

   for ($i=0; $i < count($news); $i++) {
        echo ' <div class="blog-post">
            <h2 class="blog-post-title">'.$news[$i]["title"].'</h2>
            <p class="blog-post-meta" >'.$news[$i]["date"].' by <a href="#">'.$news[$i]["author"].'</a></p>
            <a href="editadd.php?id='.$news[$i]["id"].'" >Редактировать / Удалить</a>
          <hr>';
          }

?>
                </div>

    </div>





<? require_once("../blocks/footer.php")  ?>
</body>
</html>
