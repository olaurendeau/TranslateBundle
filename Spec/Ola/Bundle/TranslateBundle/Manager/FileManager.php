<?php

namespace spec\Ola\Bundle\TranslateBundle\Manager;

use PHPSpec2\ObjectBehavior;

class FileManager extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Ola\Bundle\TranslateBundle\Manager\FileManager');
    }
}
