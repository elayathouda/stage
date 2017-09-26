<?php
require_once('config/function.php');
$articles = getArticles();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Netcoblog </title>
</head>
<body>
   <h1>Articles: </h1>
   <?php foreach($articles as $article): ?>
   <h2><?= $article->title ?></h2>
   <time><?=$article->date ?></time>
   <br /> <br />
   <a href="articles.php?id=<?= $article->id ?>">Lire la suite</a>
   <?php endforeach; ?> 
  </body>
</html>