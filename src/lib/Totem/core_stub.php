<?php
/**
 * This file is part of the TotemMVC project
 * 
 * @author Nick Rawe
 * @license http://www.opensource.org/licenses/MIT
 * @homepage http://gettotem.com
 */

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
