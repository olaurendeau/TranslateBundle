<?php

namespace spec\Ola\Bundle\TranslateBundle\Manager;

use PHPSpec2\ObjectBehavior;

class DoctrineManager extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Ola\Bundle\TranslateBundle\Manager\DoctrineManager');
    }
    
    function it_should_implement_manager_interface()
    {
    	$this->shouldBeAnInstanceOf('Ola\Bundle\TranslateBundle\Manager\ManagerInterface');
    }
}
