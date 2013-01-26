<?php

namespace spec\Ola\Bundle\TranslateBundle\ProjectInitializer;

use PHPSpec2\ObjectBehavior;

class GitInitializer extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Ola\Bundle\TranslateBundle\ProjectInitializer\GitInitializer');
    }
}
