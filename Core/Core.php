<?php
namespace Core;

class Core
{
    
    public function __construct($parametres, $session)
    {
       if(empty($session))
       {
           echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Vous n'avez pas créer de session de jeu</h3>";
       }
       if(empty($parametres))
       {
           $parametres['page'] = 'index'; 
           $parametres['controller'] = 'personnage';
       }
       
       $controller = 'Application\Controller\\'.ucfirst($parametres['controller']).'Controller';
       $page = $parametres['page'];
       
       #On regarde s'il existe un controller en testant l'existence du fichier
       if(file_exists(str_ireplace('\\', '/', RACINE_SITE.'/'.$controller.'.php')))
       { 
           #Si le fichier existe on instancie l'objet.
           $obj = new $controller;
           
           
           #on verifie que la méthode de l'objet instancié existe.
           if(method_exists($obj, $page))
           {
               #si elle existe on l'execute
               $obj->$page();
           }
           
           else
           {
               echo "<h1>Erreur 404 - Page Introuvable</h1>
                <h3>Aucune vue correspondante.</h3>";
           }
       
       }
       
       
       else 
       {
           echo "<h1>Erreur 404 - Page Introuvable</h1>
                <h3>Aucune controller correspondant (".RACINE_SITE."\\".$controller.")";
       }    
       
       
           
    }
}

?>

