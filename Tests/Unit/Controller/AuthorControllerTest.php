<?php
namespace Dawin\ChSbBlog\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 BOURDIER Stéphane <steph63b@hotmail.fr>
 *  			HOARAU Christophe <chris.hoarau@hotmail.fr>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Dawin\ChSbBlog\Controller\AuthorController.
 *
 * @author BOURDIER Stéphane <steph63b@hotmail.fr>
 * @author HOARAU Christophe <chris.hoarau@hotmail.fr>
 */
class AuthorControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Dawin\ChSbBlog\Controller\AuthorController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Dawin\\ChSbBlog\\Controller\\AuthorController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllAuthorsFromRepositoryAndAssignsThemToView()
	{

		$allAuthors = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$authorRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$authorRepository->expects($this->once())->method('findAll')->will($this->returnValue($allAuthors));
		$this->inject($this->subject, 'authorRepository', $authorRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('authors', $allAuthors);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenAuthorToView()
	{
		$author = new \Dawin\ChSbBlog\Domain\Model\Author();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('author', $author);

		$this->subject->showAction($author);
	}
}
