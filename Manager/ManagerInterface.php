<?php

namespace Ola\Bundle\TranslateBundle\Manager;

interface ManagerInterface
{
	/**
	 * Return all domains of a project, optionnaly filtered by keyword
	 * @param Ola\Bundle\TranslateBundle\Entity\Project $project
	 * @param string $filter;
	 * @return Ola\Bundle\TranslateBundle\Entity\Domain[]
	 */
	public function getDomainList(Ola\Bundle\TranslateBundle\Entity\Project $project, $filter = null);
	
	/**
	 * Return all translations of a domain, optionnaly filtered by keyword
	 * @param Ola\Bundle\TranslateBundle\Entity\Domain $domain
	 * @param string $filter;
	 * @return Ola\Bundle\TranslateBundle\Entity\Translation[]
	 */
	public function getTranslationList(Ola\Bundle\TranslateBundle\Entity\Domain $domain, $filter = null);
	
	/**
	 * Save all translations of a domain
	 * @param Ola\Bundle\TranslateBundle\Entity\Domain $domain
	 * @return boolean
	 */
	public function saveDomain(Ola\Bundle\TranslateBundle\Entity\Domain $domain);
	
}