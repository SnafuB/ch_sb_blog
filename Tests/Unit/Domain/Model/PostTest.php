<?php

namespace Dawin\ChSbBlog\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 BOURDIER Stéphane <steph63b@hotmail.fr>
 *           HOARAU Christophe <chris.hoarau@hotmail.fr>
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
 * Test case for class \Dawin\ChSbBlog\Domain\Model\Post.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author BOURDIER Stéphane <steph63b@hotmail.fr>
 * @author HOARAU Christophe <chris.hoarau@hotmail.fr>
 */
class PostTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Dawin\ChSbBlog\Domain\Model\Post
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Dawin\ChSbBlog\Domain\Model\Post();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPublicationDateReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPublicationDate()
		);
	}

	/**
	 * @test
	 */
	public function setPublicationDateForDateTimeSetsPublicationDate()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setPublicationDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'publicationDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSummaryReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSummary()
		);
	}

	/**
	 * @test
	 */
	public function setSummaryForStringSetsSummary()
	{
		$this->subject->setSummary('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'summary',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getContent()
		);
	}

	/**
	 * @test
	 */
	public function setContentForStringSetsContent()
	{
		$this->subject->setContent('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAuthorsReturnsInitialValueForAuthor()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getAuthors()
		);
	}

	/**
	 * @test
	 */
	public function setAuthorsForAuthorSetsAuthors()
	{
		$authorsFixture = new \Dawin\ChSbBlog\Domain\Model\Author();
		$this->subject->setAuthors($authorsFixture);

		$this->assertAttributeEquals(
			$authorsFixture,
			'authors',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForCategory()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForCategorySetsCategories()
	{
		$categoriesFixture = new \Dawin\ChSbBlog\Domain\Model\Category();
		$this->subject->setCategories($categoriesFixture);

		$this->assertAttributeEquals(
			$categoriesFixture,
			'categories',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTagsReturnsInitialValueForTag()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTags()
		);
	}

	/**
	 * @test
	 */
	public function setTagsForTagSetsTags()
	{
		$tagsFixture = new \Dawin\ChSbBlog\Domain\Model\Tag();
		$this->subject->setTags($tagsFixture);

		$this->assertAttributeEquals(
			$tagsFixture,
			'tags',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCommentsReturnsInitialValueForComment()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getComments()
		);
	}

	/**
	 * @test
	 */
	public function setCommentsForCommentSetsComments()
	{
		$commentsFixture = new \Dawin\ChSbBlog\Domain\Model\Comment();
		$this->subject->setComments($commentsFixture);

		$this->assertAttributeEquals(
			$commentsFixture,
			'comments',
			$this->subject
		);
	}
}
