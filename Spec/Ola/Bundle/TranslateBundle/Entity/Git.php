<?php

namespace spec\Ola\Bundle\TranslateBundle\Entity;

use PHPSpec2\ObjectBehavior;

class Git extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Ola\Bundle\TranslateBundle\Entity\Git');
    }
}
