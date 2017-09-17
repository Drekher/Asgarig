<?php
session_start();
use Core\Core;

// On appelle les d�finitions du site.
require 'boot.php';

if(!empty($_SESSION))
{
    $core = new Core($_GET, $_SESSION);
}
else
{
    trigger_error('ERREUR DETECTEE LORS DE LA CREATION DE LA SESSION',E_USER_ERROR);
}


// echo RACINE_SITE;