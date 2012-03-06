<?php
/**
 * This file is part of the TotemMVC project
 * 
 * @author Nick Rawe
 * @license http://www.opensource.org/licenses/MIT
 * @homepage http://gettotem.com
 */

$base = dirname(dirname(__DIR__)); $app = ""; $lib = "";

// Get the application path
if (isset($_SERVER['TotemAppPath']))
{
    $app = $_SERVER['TotemAppPath'];
}
elseif (strpos(ini_get("variables_order"), "E") !== false && isset($_ENV['TotemAppPath']))
{
    $app = $_ENV['TotemLibPath'];
}
else
{
    $app = "$base/production";
}

// Get the library path
if (isset($_SERVER['TotemLibPath']))
{
    $lib = $_SERVER['TotemLibPath'];
}
elseif (strpos(ini_get("variables_order"), "E") !== false && isset($_ENV['TotemLibPath']))
{
    $lib = $_ENV['TotemLibPath'];
}
else
{
    $lib = "$base/";
}

define('TOTEM_APP', $app);
define('TOTEM_PATH', $lib);
unset($base, $app, $lib);
try
{
    require_once "phar://" . TOTEM_PATH . "/Totem.Core.phar";
    $application = new Application\TotemApp();
    if ($application instanceof Totem\Core\ApplicationInterface)
    {
        $application->run();
    }
    else throw new \Exception("The application is not valid");
}
catch (\Exception $e)
{
    echo "TotemMVC cannot run the requested application: " . $e->getMessage();
}

?>