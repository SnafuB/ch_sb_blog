<?php
namespace Dawin\ChSbBlog\Domain\Repository;

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
 * The repository for Tags
 */
class TagRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
// 	public function findAllWithPosts() {
// 		$query = $this->createQuery();
// 		$query->setOrderings(array(
// 			'publicationDate' => 'DESC',
// 		));
		
// 		$queryParser = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbQueryParser');
// 		\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($queryParser->parseQuery($query));
// 		\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($query->getQuerySettings());
		
// 		return $query->execute();
// 	}

// 	public function findMatchingOrganizationAndRegion(Tx_SjrOffers_Domain_Model_Organization $organization, Tx_SjrOffers_Domain_Model_Region $region) {
//     $query = $this->createQuery();
//     $query->matching(
//         $query->logicalAnd(
//             $query->equals('organization', $organization),
//             $query->contains('regions', $region)
//         )
//     )
//     return $query->execute();
// }
    
}