<?php
  
    // création de la classe
    
class Utilisateur
{
    private $_login;
    private $_motdepasse;
    private $_role;
    
     // declaration des méthodes de la classe
    
    public function getLogin()
    {
        return $this->_login;
    }
    public function setLogin($login)
    {
        $this->_login = $login;
    }
    
    
      public function getMotdepasse()
    {
        return $this->_motdepasse;
    }
    public function setMotdepasse($motdepasse)
    {
        $this->_motdepasse = $motdepasse;
    }
    
    
      public function getRole()
    {
        return $this->_role;
    }
    public function setRole($role)
    {
        $this->_role = $role;
    }
    
}