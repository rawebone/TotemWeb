<?php
namespace Totem\Core\Event;

class NamedEvent implements Core\NamedEventInterface
{
    protected $events;
    
    public function add($name, $fn)
    {
        $this->events[$name] = $fn;
    }
    
    public function fire($name)
    {
        if (!isset($this->events[$name]))
        {
            throw new \InvalidArgumentException("${__CLASS__} was asked for fire an event '$name', which does not exist.");
        }
        
        if (is_string($fn))
        {
            call_user_func($fn);
        }
        elseif ($fn instanceof \Closure)
        {
            $this->events[$name]();
        }
        else
        {
            throw new \ErrorException("${__CLASS__} could not fire event '$name', as it's type could not be handled.");
        }
    }
    
    public function remove($name)
    {
        if (isset($this->events[$name]))
        {
            unset($this->events[$name]);
        }
    }
}

?>
