<?php
Phar::mapPhar("Totem.Model.phar");

Phar::interceptFileFuncs();

spl_autoload_register(function ($class) {
    if (strpos($class, "Totem\\Model") === false)
    {
        return;
    }
        
    $class = str_replace("\\", "/", $class);
    if (!include "phar://Totem.Model.phar/$class.php")
    {
        throw new \Exception("Cannot load $class");
    }
});

__HALT_COMPILER();
?>
