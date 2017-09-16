<?php
namespace Application\Controller;

use Core\Controller\AppController;
use Core\Model\DbFactory;
use Core\Model\ORM;

class PersonnageController extends AppController
{

    public function index()
    {
        DbFactory::ORMFactory();
        $personnage = ORM::for_table('view_personnage')
        
        ->where('nom', $_SESSION['compte'])
        ->find_one();
        $this->render('Personnage/index', [
            'personnage' => $personnage
        ]);
    }
    
}


