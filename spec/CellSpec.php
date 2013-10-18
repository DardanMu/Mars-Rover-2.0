<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CellSpec extends ObjectBehavior
{
	function let(){
		$this->beConstructedWith(0);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Cell');
    }

    function it_should_return_the_cell_state(){
    	//$this->setState(0)->willReturn(0);
    	$this->getState()->shouldReturn(0);
    }
}
