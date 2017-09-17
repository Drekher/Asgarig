<?php

class Autoloader
{

    public static function register()
    {
        spl_autoload_register(array(
            __CLASS__,
            'autoload'
        ));
    }

    public static function autoload($class)
    {
        echo 'Autoload pour : ';
        print_r($class);
        echo '<br>';
        $classToInclude = str_ireplace('\\', '/', $class);
        require RACINE_SITE . '/' . $classToInclude . '.php';
    }
}