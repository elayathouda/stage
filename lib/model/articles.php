<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
    header('location: index.php');
else 
{
    extract($_GET);
    $id = strip_tags($id);
    
    require_once('config/function.php');
    
    $article = getArticle($id);
    
}
?>


<!DOCTYPE html>
<html>
   <head>
    <meta charset="UTF-8">
    <title><?= $article->title ?></title>
   </head>
   
<body>
    <h1><?= $article->title ?></h1>
    <time><? $article->date ?></time>
    <p><?= $article->content ?></p>
    <hr />
    <form action ="article.php?id=<?=$article->id ?>" methode="post">
        <p><label for="author">Pseudo :</label><br />
        <input type="text" name="author" id="aythor" /></p>
        <p><label for="comment">Commentaire</label><br>
        <textarea name="comment" id="comment" cols="30" rows="8"></textarea></p>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>