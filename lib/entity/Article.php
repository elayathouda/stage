<?php
  
    // création de la classe "Article"
    
class Article
{
    private $_titre;
    private $_soustitre;
    private $_auteur;
    private $_imagearticle;
    private $_datearticle;
    private $_commentaires;
    
    
    // declaration des méthodes de la classe"Article"
    public function getTitre()
    {
        return $this->$_titre;
    }
    public function setTitre($titre)
    {
        $this->$_titre = $titre;
    }
    
    
    // mes méthodes 
    public function houdasetitre ($nouveautitre,$role)
    {
    if($role === 1)
    {
        $this->setTitre($nouveautitre);
    }
        else {
            echo"vous n'avez pas le droit de changer le titre";
        }
    }
    
    
    
    
        
}