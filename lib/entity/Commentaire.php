<?php
  
    // création de la classe "commentaire"
    
class Commentaire
{
    private $_comment;
    private $_datecomment;
    
    
    
     // declaration des méthodes de la classe"Commentaire"
    
    public function getComment()
    {
        return $this->_comment;
    }
    public function setComment($comment)
    {
        $this->_comment = $comment;
    }
    
    
    
     public function getDatecomment()
    {
        return $this->_datecomment;
    }
    public function setDatecomment($datecomment)
    {
        $this->_datecomment = $datecomment;
    }
}
