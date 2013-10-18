<?php

class Cell
{
	public $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}
