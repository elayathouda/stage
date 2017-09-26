<?php
//Fonction qui récupére tous les articles

function getArticles()
{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT id, title, date FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}
// fonction qui récupére un article
 function getArticle($id)
 {
    require('config/connect.php');
    $req=$bdd->prepare('SELECT * FROM articles WHERE id = ? ');
    $req->execute(array($id));
    if($req->rowCount() == 1)
    {
    $data = $req->fetch(PDO::FETCH_OBJ);
     return $data;
    }
    else 
        header('location: index.php');
 }