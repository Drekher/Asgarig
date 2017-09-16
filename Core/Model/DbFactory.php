<?php
namespace Core\Model;

class DbFactory
{

    public static function ORMFactory() {
        
        include(RACINE_INC.'/include/connexion.inc.php');
        
        # Initialisation de Idiorm
        ORM::configure('mysql:host='.DBHOST.';dbname='.DBNAME);
        ORM::configure('username', DBUSERNAME);
        ORM::configure('password', DBPASSWORD);
        
        /**
         * Configuration de la clé primaire de chaque table
         * Cette configuration n'est nécessaire que si
         * les clé primairesd sont différentes de 'id'
         */
        
        ORM::configure('id_column_overrides', array(
            'account'    => 'id',
            'view_personnage' => 'idPersonnage',
        ));
    }
}

