<?php
namespace Totem\Application;

use Respect\Rest\Router;

class TotemApp
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
            echo "Hello from TotemMVC";
        });
    }
}

?>
