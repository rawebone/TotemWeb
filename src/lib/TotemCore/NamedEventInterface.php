<?php
namespace Totem\Core;

interface NamedEventInterface extends Core\EventInterface
{
    public function add($name, $fn);
    public function remove($name);
}


?>
