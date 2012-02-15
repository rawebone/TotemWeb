<?php
/**
 * TotemMVC Framework Entry Point
 * 
 * @license http://www.opensource.org/licenses/MIT
 * @author Nick Rawe
 */

ini_set("display_errors", E_ALL);

$base = dirname(__DIR__);
define('TOTEM_APP', (isset($_ENV['TotemAppPath']) ? $_ENV['TotemAppPath'] : "$base/production"));
define('TOTEM_LIB', (isset($_ENV['TotemLibPath']) ? $_ENV['TotemLibPath'] : "$base/lib"));
unset($base);

require_once TOTEM_LIB . "/SPL/SplClassLoader.php";
require_once "phar://" . TOTEM_LIB . "/Totem.Core.phar";

$loader = new SplClassLoader("Application", TOTEM_APP);
$loader->register();

try
{
    $application = new Application\TotemApp();
    if ($application instanceof Totem\Core\TotemApplicationInterface)
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