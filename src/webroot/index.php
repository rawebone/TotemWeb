<?php
/**
 * TotemMVC Framework Entry Point
 * 
 * @license http://www.opensource.org/licenses/MIT
 * @author Nick Rawe
 */

$base = dirname(__DIR__);
define('TOTEM_APP', (isset($_ENV['TotemAppPath']) ? $_ENV['TotemAppPath'] : "$base/application/production/"));
define('TOTEM_LIB', (isset($_ENV['TotemLibPath']) ? $_ENV['TotemLibPath'] : "$base/lib/"));
unset($base);

require_once "${TOTEM_LIB}SPL/SplClassLoader.php";
require_once "phar://${TOTEM_LIB}Totem.Common.phar";

$loader = new SplClassLoader("\\Totem\\Application\\", TOTEM_APP);
$loader->register();

try
{
    $application = new \Totem\Application\TotemApp();
    if (!$application instanceof Totem\Core\TotemApplicationInterface)
    {
        throw new \Exception("The application is not valid");
    }
    $application->run();    
}
catch (\Exception $e)
{
    echo "TotemMVC cannot run the requested application: " . $e->getMessage();
}

?>