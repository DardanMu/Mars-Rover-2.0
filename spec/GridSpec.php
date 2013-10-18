<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GridSpec extends ObjectBehavior
{

	function let(){
		$this->beConstructedWith(10, 10);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Grid');
    }

    function it_should_return_an_array_of_cell_objects(){
    	$this->getGrid()->shouldHaveCount(10);
    }
}
