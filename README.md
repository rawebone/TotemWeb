# TotemMVC

The TotemMVC project aims to provide a lightweight, easy-to-deploy, no frills MVC framework, leveraging Open Source Components.

Goals
------------

 - To create a lightweight MVC framework
 - To follow the principles of SOLID
 - To create an application without a global state for manageable dependencies


Building
-------------

TotemMVC uses the following Open Source components:

 - [Respect](https://github.com/Respect/Rest): Thin RESTful Client for PHP5.3
 - [TotemView] (https://github.com/nrawe/TotemView): 

As such, Totem doesn't contain all of the packages needed to be built but rather the build scripts to make a whole package. This allows us to use [composer](https://github.com/composer/composer), while keeping the actual repository for only new components.

Building is quite straight forward, but you will need to have the following installed:

 - [Ant] (http://ant.apache.org/)
 - [Composer] (https://github.com/composer/composer)
 - [PHPSpec] (http://www.phpspec.net)

