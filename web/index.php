<?php
require_once( "..\\lib\\entity\\Article.php" );


$article = new Article;




var_dump( $article);

$article->houdasettitre("mon nouveau titre",1);
var_dump( $article);
?>