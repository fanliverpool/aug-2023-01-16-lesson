<?php

include_once '..' . DIRECTORY_SEPARATOR . 'config.php';

spl_autoload_register(function ($class){

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $classFile = '..'.DIRECTORY_SEPARATOR.$class . '.php';

    if (file_exists($classFile)) {
        include_once $classFile;
        return true;
    }

    return false;

});

\app\core\Route::init();