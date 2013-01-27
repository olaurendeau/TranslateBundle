<?php

namespace spec\Ola\Bundle\TranslateBundle\Manager;

use PHPSpec2\ObjectBehavior;

class GitManager extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Ola\Bundle\TranslateBundle\Manager\GitManager');
    }
    
    /**
     * @param Ola\Bundle\TranslateBundle\Entity\Git
     */
    function it_clone_project_in_cache_folder($git)
    {
    	$git->getLink()->willReturn('https://github.com/testgitlib/symfony-barcelona.git');
    	$git->getLogin()->willReturn('o.laurendeau+testgitlib@gmail.com');
    	$git->getPassword()->willReturn('testgitlib23');

    	$git->getRepository()->shouldBeCalled();
    	 
    	$this->clone($git)->shouldReturn(true);
    	
    	$git->getRepository()->shouldReturnAnInstanceOf('Gitonomy\Git\Repository\Repository');
    }
    
    /**
     * @param Ola\Bundle\TranslateBundle\Entity\Git
     */
    function it_rebase_on_git($git)
    {
    	$this->rebase($git)->shouldReturn(true);
    }
    
    /**
     * @param Ola\Bundle\TranslateBundle\Entity\Git
     */
    function it_commit_on_git($git)
    {
    	$this->commit($git)->shouldReturn(true);
    }
}
