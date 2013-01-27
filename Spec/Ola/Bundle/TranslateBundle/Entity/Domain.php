<?php

namespace spec\Ola\Bundle\TranslateBundle\Entity;

use PHPSpec2\ObjectBehavior;

class Domain extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Ola\Bundle\TranslateBundle\Entity\Domain');
    }
}
