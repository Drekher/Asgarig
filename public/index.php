<?php
session_start();
use Core\Core;

#On appelle les définitions du site. 
require 'boot.php';

$core = new Core($_GET,$_SESSION);

// echo RACINE_SITE;