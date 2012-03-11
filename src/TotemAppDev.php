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

//  Define Namespaces and Aliases

class TotemApp implements \Totem\Core\ApplicationInterface
{
    public function run()
    {
        echo "Hello, from TotemMVC";
    }
}

?>
