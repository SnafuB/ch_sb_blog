<?php
namespace Dawin\ChSbBlog\Controller;

/***************************************************************
 *
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
 * TagController
 */
class TagController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * tagRepository
     *
     * @var \Dawin\ChSbBlog\Domain\Repository\TagRepository
     * @inject
     */
    protected $tagRepository = NULL;

    /**
     * postRepository
     *
     * @var \Dawin\ChSbBlog\Domain\Repository\PostRepository
     * @inject
     */
    protected $postRepository = NULL;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign('tags', $tags);
    }

    /**
     * action show
     *
     * @param \Dawin\ChSbBlog\Domain\Model\Tag $tag
     * @return void
     */
    public function showAction(\Dawin\ChSbBlog\Domain\Model\Tag $tag)
    {
        $postRepository = $this->objectManager->get('Dawin\ChSbBlog\Domain\Repository\PostRepository');
        $tagPosts = $postRepository->findByTags($tag->getUid());

        $this->view->assignMultiple(array(
            'tag' => $tag,
            'posts' => $tagPosts,
        ));
    }
}