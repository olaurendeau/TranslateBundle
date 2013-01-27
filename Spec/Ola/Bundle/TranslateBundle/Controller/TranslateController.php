<?php

namespace spec\Ola\Bundle\TranslateBundle\Controller;

use PHPSpec2\ObjectBehavior;

class TranslateController extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Ola\Bundle\TranslateBundle\Controller\TranslateController');
    }
}
