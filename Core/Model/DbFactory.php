<?php
namespace Core\Model;

class DbFactory
{

    public static function ORMFactory()
    {
        
        // fichier a cr�er soit m�me.
        include (RACINE_INC . '/include/connexion.inc.php');
        
        // Initialisation de Idiorm
        ORM::configure('mysql:host=' . DBHOST . ';dbname=' . DBNAME);
        ORM::configure('username', DBUSERNAME);
        ORM::configure('password', DBPASSWORD);
        
        /**
         * Configuration de la cl� primaire de chaque table
         * Cette configuration n'est n�cessaire que si
         * les cl� primairesd sont diff�rentes de 'id'
         */
        
        ORM::configure('id_column_overrides', array(
            'account' => 'id',
            'view_personnage' => 'idPersonnage'
        ));
    }
}

