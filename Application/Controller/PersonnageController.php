<?php
namespace Application\Controller;

use Core\Controller\AppController;
use Core\Model\DbFactory;
use Core\Model\ORM;

class PersonnageController extends AppController
{
    
    private $personnage;
    
    function __construct()
    {
        DbFactory::ORMFactory();
        $this->personnage = ORM::for_table('view_personnage')->where('nom', $_SESSION['compte'])->find_one();
    }
    
    
    public function index()
    {
        
        $this->render('Personnage/index', [
            'personnage' => $this->personnage
        ]);
    }
    
    public function fichepersonnage()
    {
        $this->render('Personnage/index', [
            'personnage' => $this->personnage
        ]);
    }

    public static function hasPersonnage($information)
    {
        if (empty($information['personnage']->idPersonnage)) {
            return false;
        } else {
            return true;
        }
    }
}


