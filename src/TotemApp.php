<?php
//  ---> Totem Application Entry Point
namespace Application;

//  Libraries
require_once TOTEM_LIB . "/Rest.phar";

//  Namespaces and Aliases
use \Respect\Rest\Router;

class TotemApp implements \Totem\Core\ApplicationInterface
{
    protected $request;
    
    public function run()
    {
        //  Create the router
        $this->request = new Router();
        
        //  Setup routes
        $this->setupRoutes();
    }
    
    public function setupRoutes()
    {
        $r = $this->request;
        
        $r->get("/", function () {
            return "Hello from TotemMVC";
        });
    }
}

?>
