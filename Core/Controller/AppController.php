<?php
namespace Core\Controller;

class AppController
{

    private $_viewparams;

    protected function render($view, $viewparams = '')
    {
        
        // Récupération et Affectation des Paramètres de la Vue
        $this->_viewparams = $viewparams;
        
        // Affichage de l'En-tete
        require HEADER_SITE;
        
        // Inclusion de la Vue
        include_once VIEW_SITE . '/' . $view . '.php';
        
        // Affichage du Pied de Page
        require FOOTER_SITE;
    }

    public function getParams()
    {
        return $this->_viewparams;
    }
}

