<?php
namespace Totem\Common;

interface NamedEventInterface extends Common\EventInterface
{
    public function add($name, $fn);
    public function remove($name);
}


?>
