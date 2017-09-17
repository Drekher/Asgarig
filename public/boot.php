<?php

// Racine du site internet
define('RACINE_SITE', dirname(__FILE__, 2));

define('RACINE_INC', dirname(__FILE__, 3));
// En-tete du site
define('HEADER_SITE', RACINE_SITE . '/Application/Layout/header.inc.php');

// Pied de Page du site
define('FOOTER_SITE', RACINE_SITE . '/Application/Layout/footer.inc.php');

define('VIEW_SITE', RACINE_SITE . '/Application/Views');

define('PUBLIC_URL', 'compte/public/');

// On lance l'autoloader
require_once 'Autoloader.php';
Autoloader::register();