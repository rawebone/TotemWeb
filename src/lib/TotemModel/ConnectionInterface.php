<?php
namespace Totem\Model;

interface ConnectionInterface
{
    public function connect();
    public function disconnect();
    public function exec($query);
}

?>
