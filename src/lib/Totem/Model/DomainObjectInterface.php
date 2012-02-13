<?php
namespace Totem\Model;

interface DomainObjectInterface
{
    public function __get($name);
    public function __set($name, $value);
}

?>
