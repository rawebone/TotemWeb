<?php
Phar::mapPhar("Totem.View.phar");
Phar::interceptFileFuncs();

spl_autoload_register(function ($class) {
    if (strpos($class, "Totem\\View") === false)
    {
        return;
    }
        
    $class = str_replace("\\", "/", $class);
    if (!include "phar://Totem.View.phar/$class.php")
    {
        throw new \Exception("Cannot load $class");
    }
});

__HALT_COMPILER();
?>
