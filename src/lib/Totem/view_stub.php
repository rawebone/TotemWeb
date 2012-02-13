<?php
Phar::mapPhar("Totem.View.phar");

if (!class_exists("SplClassLoader", false))
{
    require_once "phar://Totem.View.phar/SPL/SplClassAutoloader";    
}

$loader = new SplClassLoader("\\Totem\\View\\", "phar://Totem.View.phar");
$loader->register();

__HALT_COMPILER();
?>
