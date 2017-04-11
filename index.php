<!DOCTYPE html>
<html>
<head>
<?
require_once("functions/functions.php");

$news = getArticle(5, $_GET["id"]);
$title = "Главная страница";
require_once("blocks/head.php"); 

?>
</head>
<body>
<? require_once("blocks/header.php"); ?>
<br>
    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
<?php 
   for ($i=0; $i < count($news); $i++) {
        echo ' <div class="blog-post">
            <h2 class="blog-post-title">'.$news[$i]["title"].'</h2>
            <p class="blog-post-meta"> '.$news[$i]["date"].' by <a href="#">'.$news[$i]["author"].'</a></p>
           <blockquote>
              <p>'.$news[$i]["citata"].'</p>
            </blockquote>
            <p>'.$news[$i]["text"].'</p>
            <a href="article.php?id='.$news[$i]["id"].'">Читать</a>
          </div><br>
          <hr>';
          }

?>
        </div>


<? require_once("blocks/about.php")  ?>

      </div>

    </div>





<? require_once("blocks/footer.php")  ?>
</body>
</html>
