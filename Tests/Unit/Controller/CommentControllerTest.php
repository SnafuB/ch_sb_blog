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
 * Test case for class Dawin\ChSbBlog\Controller\CommentController.
 *
 * @author BOURDIER Stéphane <steph63b@hotmail.fr>
 * @author HOARAU Christophe <chris.hoarau@hotmail.fr>
 */
class CommentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Dawin\ChSbBlog\Controller\CommentController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Dawin\\ChSbBlog\\Controller\\CommentController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenCommentToCommentRepository()
	{
		$comment = new \Dawin\ChSbBlog\Domain\Model\Comment();

		$commentRepository = $this->getMock('Dawin\\ChSbBlog\\Domain\\Repository\\CommentRepository', array('add'), array(), '', FALSE);
		$commentRepository->expects($this->once())->method('add')->with($comment);
		$this->inject($this->subject, 'commentRepository', $commentRepository);

		$this->subject->createAction($comment);
	}
}
