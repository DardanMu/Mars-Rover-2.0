<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MarsRoverSpec extends ObjectBehavior
{

	function let(){
		$this->beConstructedWith(0, 0);	
	}


    function it_is_initializable()
    {
        $this->shouldHaveType('marsRover');
    }

    function it_should_return_direction(){
    	$this->getDirection()->shouldReturn('North');
    }

    function it_should_turn_left(){
    	//$this->getDirection()->willReturn('N');
    	$this->turnLeft();
    	$this->getDirection()->shouldReturn('West');
    }

    function it_should_turn_right(){
    	$this->turnRight();
    	$this->getDirection()->shouldReturn('East');
    }

    function it_should_move_forward(){
    	$this->moveForward();
    	$this->getX()->shouldReturn(1);
    	$this->getY()->shouldReturn(0);
    }

    function it_should_move_backwards(){
    	$this->moveBackward();
    	$this->getX()->shouldReturn(-1);
    	$this->getY()->shouldReturn(0);
    }

    function it_should_move_forward_in_a_different_direction(){
    	$this->moveForward();
    	$this->moveForward();
    	$this->turnRight();
    	$this->moveForward();
    	$this->moveForward();
    	$this->getX()->shouldReturn(2);
    	$this->getY()->shouldReturn(2);
    }
}