<?php
/**
 * This file is part of the TotemMVC project
 * 
 * @author Nick Rawe
 * @license http://www.opensource.org/licenses/MIT
 * @homepage http://gettotem.com
 */

//  ---> Totem Application Entry Point
namespace Application;

//  Include components here

/*
 * For example, are you using a third party application ComponentX?
 * You could then:
 */
require_once TOTEM_APP . "Application/Lib/ComponentX/bootstrap.php";

/*
 * Or if it comes as a Phar package:
 */
require_once "phar://" . TOTEM_APP . "Application/Lib/ComponentX.phar";

//  Define Namespaces and Aliases

/*
 * For example, have you created a custom component? 
 * Save it to Lib\ComponentY with a namespace of Application\Lib and:
 */
use Application\Lib\ComponentY;

/*
 * Calling '$c = new ComponentY();' will then autoload ComponentY for you.
 */

class TotemApp implements \Totem\Core\ApplicationInterface
{
    public function run()
    {
    }
}

?>
