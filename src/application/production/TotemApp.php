<?php
//  --> Totem Application Entry Point
namespace Totem\Application;

//  Load libraries to be used as part of the application
require_once "${TOTEM_LIB}Rest.phar";
require_once "${TOTEM_LIB}Totem.View.phar";
require_once "${TOTEM_LIB}Totem.Model.phar";

use Totem\Core;
use Respect\Rest\Router;

class TotemApp implements Core\TotemApplicationInterface
{
    protected $request;
    
    public function run()
    {
        //  Create the router
        $this->request = new Router();
        
        //  Setup routes
        $this->setupRoutes();
        
        //  Dispatch the request
        $this->request->dispatch();
    }
    
    public function setupRoutes()
    {
        $r = $this->request;
        
        $r->get("/", function () {
            echo "Hello";
        });
    }
}

?>
