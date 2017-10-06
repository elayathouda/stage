<?php
  
    // création de la classe
    
class Role
{
    private $_libelle;
 

    
    	public function get_libelle(){
		return $this->_libelle;
	}

	public function set_libelle($_libelle){
		$this->_libelle = $_libelle;
	}
    
    
}