<?php
Phar::mapPhar("Totem.Core.phar");
Phar::interceptFileFuncs();

spl_autoload_register(function ($class) {
    if (strpos($class, "Totem\\Core") === false)
    {
        return;
    }
        
    $class = str_replace("\\", "/", $class);
    if (!include "phar://Totem.Core.phar/$class.php")
    {
        throw new \Exception("Cannot load $class");
    }
});

__HALT_COMPILER();
?>
