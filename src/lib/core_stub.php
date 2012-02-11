<?php
Phar::mapPhar("Totem.Core.phar");

if (!class_exists("SplClassLoader", false))
{
    require_once "phar://Totem.Core.phar/SPL/SplClassAutoloader";    
}

$loader = new SplClassLoader("\\Totem\\Core\\", "phar://Totem.Core.phar");
$loader->register();

__HALT_COMPILER();
?>
