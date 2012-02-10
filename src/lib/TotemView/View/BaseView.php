<?php
namespace Totem\View\View;

class BaseView implements View\ViewInterface
{
    protected $values   = array();
    
    protected $viewfile = null;
    
    public function __get($name)
    {
        $value = null;
        
        if (method_exists($this, "get$name"))
        {
            $value = $this->{"get$name"};
        }
        if (isset($this->values[$name]))
        {
            $value = $this->values[$name];
        }
        
        return $value;
    }
    
    public function __set($name, $value)
    {
        if (method_exists($this, "set$name"))
        {
            $this->{"set$name"}($value);
        }
        else $this->values[$name] = $value;
    }
    
    public function get($name)
    {
        return $this->__get($name);
    }
    
    public function getViewFilename()
    {
        return $this->view;
    }
    
    public function render($output = true)
    {
        if ($this->viewfile == null || !file_exists($this->viewfile))
        {
            throw new \Exception("${__CLASS__} cannot find the associated view file '$this->viewfile'.");
        }
        
        extract($this->values);
        ob_start();
        include $this->viewfile;
        return ($output ? ob_end_flush() : ob_get_flush());
    }
    
    public function set($name, $value)
    {
        $this->__set($name, $value);    
    }
    
    public function setViewFilename($filename)
    {
        $this->viewfile = $filename;
    }
    
    protected function initialiseValues(array $values = array())
    {
        $this->values += $values;
    }
}

?>
