<?php
namespace Dawin\ChSbBlog\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Post
 */
class Post extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * publicationDate
     *
     * @var \DateTime
     */
    protected $publicationDate = null;
    
    /**
     * summary
     *
     * @var string
     */
    protected $summary = '';
    
    /**
     * content
     *
     * @var string
     */
    protected $content = '';
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * authors
     *
     * @var \Dawin\ChSbBlog\Domain\Model\Author
     */
    protected $authors = null;
    
    /**
     * categories
     *
     * @var \Dawin\ChSbBlog\Domain\Model\Category
     */
    protected $categories = null;
    
    /**
     * tags
     *
     * @var \Dawin\ChSbBlog\Domain\Model\Tag
     */
    protected $tags = null;
    
    /**
     * comments
     *
     * @var \Dawin\ChSbBlog\Domain\Model\Comment
     * @lazy
     */
    protected $comments = null;
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the publicationDate
     *
     * @return \DateTime $publicationDate
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }
    
    /**
     * Sets the publicationDate
     *
     * @param \DateTime $publicationDate
     * @return void
     */
    public function setPublicationDate(\DateTime $publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }
    
    /**
     * Returns the summary
     *
     * @return string $summary
     */
    public function getSummary()
    {
        return $this->summary;
    }
    
    /**
     * Sets the summary
     *
     * @param string $summary
     * @return void
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }
    
    /**
     * Returns the content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * Sets the content
     *
     * @param string $content
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Returns the authors
     *
     * @return \Dawin\ChSbBlog\Domain\Model\Author $authors
     */
    public function getAuthors()
    {
        return $this->authors;
    }
    
    /**
     * Sets the authors
     *
     * @param \Dawin\ChSbBlog\Domain\Model\Author $authors
     * @return void
     */
    public function setAuthors(\Dawin\ChSbBlog\Domain\Model\Author $authors)
    {
        $this->authors = $authors;
    }
    
    /**
     * Returns the categories
     *
     * @return \Dawin\ChSbBlog\Domain\Model\Category $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
    
    /**
     * Sets the categories
     *
     * @param \Dawin\ChSbBlog\Domain\Model\Category $categories
     * @return void
     */
    public function setCategories(\Dawin\ChSbBlog\Domain\Model\Category $categories)
    {
        $this->categories = $categories;
    }
    
    /**
     * Returns the tags
     *
     * @return \Dawin\ChSbBlog\Domain\Model\Tag $tags
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    /**
     * Sets the tags
     *
     * @param \Dawin\ChSbBlog\Domain\Model\Tag $tags
     * @return void
     */
    public function setTags(\Dawin\ChSbBlog\Domain\Model\Tag $tags)
    {
        $this->tags = $tags;
    }
    
    /**
     * Returns the comments
     *
     * @return \Dawin\ChSbBlog\Domain\Model\Comment $comments
     */
    public function getComments()
    {
        return $this->comments;
    }
    
    /**
     * Sets the comments
     *
     * @param \Dawin\ChSbBlog\Domain\Model\Comment $comments
     * @return void
     */
    public function setComments(\Dawin\ChSbBlog\Domain\Model\Comment $comments)
    {
        $this->comments = $comments;
    }

}