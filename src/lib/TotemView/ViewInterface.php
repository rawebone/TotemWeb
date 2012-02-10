<?php
namespace Totem\View;

interface ViewInterface
{
    public function __get($name);
    public function __set($name, $value);
    public function get($name);
    public function getViewFilename();
    protected function initialiseValues(array $values = array());
    public function render($output = true);
    public function set($name, $value);
    public function setViewFilename($filename);
}

?>
