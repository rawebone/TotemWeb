<?php
Phar::mapPhar("Totem.Model.phar");

if (!class_exists("SplClassLoader", false))
{
    require_once "phar://Totem.Model.phar/SPL/SplClassAutoloader";    
}

$loader = new SplClassLoader("\\Totem\\Model\\", "phar://Totem.Model.phar/");
$loader->register();

__HALT_COMPILER();
?>
