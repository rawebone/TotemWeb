<?php
/**
 * This file is part of the TotemMVC project
 * 
 * @author Nick Rawe
 * @license http://www.opensource.org/licenses/MIT
 * @homepage http://gettotem.com
 */

$base = dirname(__DIR__); $app = "";

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

define('TOTEM_APP', $app);

//  Application Autoloading
spl_autoload_register(function($class) use ($app) {
    if (strpos($class, "Application\\") === false)
    {
        return;
    }
        
    $class = str_replace("\\", "/", $class);
    if (!include "$app/$class.php")
    {
        throw new \Exception("Cannot load $class");
    }
});

try
{
    require_once "phar://$base/Totem.Core.phar";
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