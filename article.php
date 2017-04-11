<!DOCTYPE html>
<html>
<head>
<?
require_once("functions/functions.php");
$news = getArticle(1, $_GET["id"]);
$title = $news["title"];
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
        echo ' <div class="blog-post">
            <h2 class="blog-post-title">'.$news["title"].'</h2>
            <p class="blog-post-meta">'.$news["date"].' by '.$news["author"].'</p>
            <hr>
           <blockquote>
              <p>'.$news["citata"].'</p>
            </blockquote>
            <p>'.$news["content"].'</p>
            <a href="index.php"> Назад</a>
          </div>';
?>
        </div>

     <? require_once("blocks/about.php")  ?>
      
      </div>

    </div>

<br><br><br><br><br><br><br><br>

<? require_once("blocks/footer.php")  ?>
</body>
</html>