<?php

class Grid
{
	public $width; // no. of cells in x axis
	public $height; //
	public $grid = array();

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;

        for ($x=0; $x < $this->width; $x++) { 
        	$this->grid[$x] = array();

        	for ($y=0; $y < $this->height; $y++) { 
        		$this->grid[$x][$y] = new Cell(0);
        	}
        }
    }

    public function getGrid()
    {
        return $this->grid;
    }
}