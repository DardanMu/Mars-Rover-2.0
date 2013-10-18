<?php

class Controller
{
	private $commands;
    //public $rover;

    public function __construct($commands, MarsRover $rover, Grid $grid)
    {
        $this->commands = str_split($commands);
        $this->rover = $rover;
        $this->grid = $grid;
    }

    public function returnInstructions()
    {
        return $this->commands;
    }

    public function outputInfo()
    {
        $posX = $this->rover->getX();
        $posY = $this->rover->getX();
        $direction = $this->rover->getDirection();
        print "Rover is at position X: $posX Y: $posY , and is facing $direction".PHP_EOL;
    }

    public function controlRover()
    {
        foreach ($this->commands as $command) {
            switch ($command) {
                case 'f':
                    $this->rover->moveForward();
                    break;
                
                case 'b':
                    $this->rover->moveBackward();
                    break;

                case 'l':
                    $this->rover->turnLeft();
                    break;

                case 'r':
                    $this->rover->turnRight();
                    break;
            }
        }
        $this->outputInfo();
    }
}