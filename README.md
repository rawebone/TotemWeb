# TotemMVC

The TotemMVC project aims to provide a fast, flexible and easy to use MVC
framework.

Why
--------

I look around at other frameworks at lot, and this is not my first attempt
at creating one. I've been looking for something which meets my requirements
as a developer: fast, easy to install and quick to try things out with. This
is not a case of NIH syndrome- this project has a definite goal to achieve which
I have not found supported in any other frameworks.

There are lots of great frameworks out there that attempt to provide a full
stack with everything you could possibly need. If that's what you require,
then this one isn't for you.

The overall goal of Totem is not to be all encompassing. Totem's traditionally
represent ancestors in many cultures, and that's why I've taken it as the name
for this project. TotemMVC aims to be the ancestor of your application. It
doesn't ship with an ORM, but if you want to use one, you can.
You want to use <your favourite view system>, then you can with just some simple
configuration changes to your webserver setup.

This project gives you a setup to do basic tasks with. You don't have to keep
using them, or loading them. How your application evolves once you've downloaded
is entirely up to you, the developer. With the default setup, if you're requirements
change it should be easy to port to another framework.
 
Use Cases
---------

#### I have an idea that I want to prototype

For many developers, ideas come like a flash of lightening- a big boom with lots
of energy empowering you to create something. It doesn't last long, and the
more time between fingers to keyboard the more chance that you will not capture
the idea at it's fullest.

The goal of Totem is to be so straight forward that you can have a basic prototype
going as soon as possible (depending on the project complexity of course).

#### I like a number of different components from other vendors, but no framework brings them together.

You have full control of your runtime. The libraries loaded are configurable,
and apart from the Core Totem Namespace, the framework has no dependencies.

#### I want to be able to test upgrades without having to copy paste all over the place

Totem can be overridden by environmental settings exposed through your webserver.
This allows it to be configured quite quickly. Considering this basic setup.

http://www.yourdomain.com
http://dev.yourdomain.com

This can be achieved using a minimal web configuration, for instance in Apache:

    &lt;VirtualHost *:80&gt;
        ServerName www.yourdomain.com
        DocumentRoot /path/to/totem/webroot/

        #   Totem Config
        SetEnv TotemAppPath /path/to/totem/application/production/
    &lt;/VirtualHost&gt;

    &lt;VirtualHost *:80&gt;
        ServerName dev.yourdomain.com
        DocumentRoot /path/to/totem/webroot/

        #   Totem Config
        SetEnv TotemAppPath /path/to/totem/application/development/
    &lt;/VirtualHost&gt;

With one folder structure:

    /path/to/totem
        /application
            /development
            /production
        /lib
        /webroot

You want to test an upgrade to the core framework on your development environment?

    &lt;VirtualHost *:80&gt;
        ServerName dev.yourdomain.com
        DocumentRoot /path/to/totem/webroot/

        #   Totem Config
        SetEnv TotemAppPath /path/to/totem/application/development/
        SetEnv TotemLibPath /path/to/totem/lib&lt;x&gt;/
    &lt;/VirtualHost&gt;

It should be that simple.