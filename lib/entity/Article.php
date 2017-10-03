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
        return $this->_titre;
    }
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }
    
    
    
    public function getSoustitre()
    {
        return $this->_soustitre;
    }
    public function setSoustitre($soustitre)
    {
        $this->_soustitre = $soustitre;
    }
    
    
    public function getAuteur()
    {
        return $this->_auteur;
    }
    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }
    
    
    
     public function getImagearticle()
    {
        return $this->_imagearticle;
    }
    public function setImageartile($imagearticle)
    {
        $this->_imagearticle = $imagearticle;
    }
    
    
    public function getDatearticle()
    {
        return $this->_datearticle;
    }
    public function setDatearticle($datearticle)
    {
        $this->_datearticle = $datearticle;
    }
    
    
    public function getCommentaires()
    {
        return $this->_commentaire;
    }
    public function setCommentaires($commentaires)
    {
        $this->_commentaires = $commentaires;
    }
    
    
    // mes méthodes 
    
    public function houdasettitre ($nouveautitre,$role)
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