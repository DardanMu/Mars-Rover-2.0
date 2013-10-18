<?php

class MarsRover
{
	private $directions = array('North', 'East', 'South', 'West');
	//private $direction = 'N';
	private $x = 0;
	private $y = 0;



    public function __construct($x, $y)
    {
    	reset($this->directions);
        $this->x = $x;
        $this->y = $y;
    }

    public function getDirection()
    {
        return current($this->directions);
    }

    public function turnLeft()
    {
        if(!prev($this->directions)){
        	end($this->directions);
        }
    }

    public function turnRight()
    {
        if(!next($this->directions)){
        	start($this->directions);
        }
    }

    public function moveForward()
    {
        switch ($this->getDirection()) {
        	case 'North':
        		$this->x++;
        		break;
        	case 'East':
        		$this->y++;
        		break;
        	case 'South':
        		$this->x--;
        		break;
        	case 'West':
        		$this->y--;
        		break;
        }
    }

    public function moveBackward()
    {
        switch ($this->getDirection()) {
        	case 'North':
        		$this->x--;
        		break;
        	case 'East':
        		$this->y--;
        		break;
        	case 'South':
        		$this->x++;
        		break;
        	case 'West':
        		$this->y++;
        		break;
        }
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}
