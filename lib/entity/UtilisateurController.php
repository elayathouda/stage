<?php
class UtilisateurController{
    public static function testconnection($login-form, $motdepass-form)
    {
    
        
        // renseigne une instance avec des parametres de recherche pour la requete SQL a venir du modele
        
        $utilisateur= new Utilisateur();
        $utilisateur->setLogin($login-form);
        $utilisateur->setMotdepasse($motdepass-form);
        
        
        // Modele
        $bdd = new Acces();
         $found = $bdd->tester($utilisateur);
            
        // SELECT COUNT * FROM utilisateur WHERE login = $utilisateur->getLogin() AND motdepasse = $utlisateur->getMotdepasse();
            
        }
    }



// https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/tp-creer-un-espace-membres
