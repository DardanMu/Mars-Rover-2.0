<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ControllerSpec extends ObjectBehavior
{
	/**
	 * @param MarsRover $rover
     * @param Grid $grid
	 */
	function let($rover, $grid){
		$this->beConstructedWith("ffrff", $rover, $grid);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Controller');
    }

    function it_should_read_string_of_instructions_and_turn_into_an_array(){
    	$this->returnInstructions()->shouldReturn(array('f', 'f', 'r', 'f', 'f'));
    }

    function it_should_send_commands_to_the_rover($rover, $grid){
    	$this->controlRover();
        $rover->moveForward()->shouldBeCalled();
        $rover->moveForward()->shouldBeCalled();
        $rover->turnRight()->shouldBeCalled();
        $rover->moveForward()->shouldBeCalled();
        $rover->moveForward()->shouldBeCalled();
    }
}
