<?php

$base = dirname(__DIR__);
define('TOTEM_APP', (isset($_ENV['TotemAppPath']) ? $_ENV['TotemAppPath'] : "$base/application/production/"));
define('TOTEM_LIB', (isset($_ENV['TotemLibPath']) ? $_ENV['TotemLibPath'] : "$base/lib/"));
unset($base);

$commonLib      = (isset($_ENV['TotemCommonLib']) ? $_ENV['TotemCommonLib'] : "${TOTEM_LIB}TotemCommon.phar");
$viewLib        = (isset($_ENV['TotemViewLib']) ? $_ENV['TotemViewLib'] : "${TOTEM_LIB}TotemView.phar");
$modelLib       = (isset($_ENV['TotemModelLib']) ? $_ENV['TotemModelLib'] : "${TOTEM_LIB}TotemModel.phar");
$controllerLib  = (isset($_ENV['TotemControllerLib']) ? $_ENV['TotemControllerLib'] : "${TOTEM_LIB}TotemController.phar");

require_once "${TOTEM_LIB}SPL/SplClassLoader.php";
require_once "phar://$commonLib";
require_once "phar://$viewLib";
require_once "phar://$modelLib";
require_once "phar://$controllerLib";
unset($commonLib, $viewLib, $modelLib, $controllerLib);

$loader = new SplClassLoader("\\Totem\\Application\\", TOTEM_APP);
$loader->register();

$application = new \Totem\Application\TotemApp();
$application->run();

?>