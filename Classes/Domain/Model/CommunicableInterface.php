<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.interface.own.use.imports._18_0_5_16b8041b_1470594461951_750505_6153) ENABLED START */
// TODO: put your further use imports here
/* PROTECTED REGION END */

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 - 2016 Nico Herbig
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
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
interface CommunicableInterface
{

    /**
     * @return boolean
     */
    public function hasCommunicationData();

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Telephone>
     */
    public function getTelephones();

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Telephone
     */
    public function getCorrespondenceTelephone();

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\EMail>
     */
    public function getEMails();

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\EMail
     */
    public function getCorrespondenceEMail();

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Website>
     */
    public function getWebsites();

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Website
     */
    public function getCorrespondenceWebsite();

    /* PROTECTED REGION ID(php.interface.own.code._18_0_5_16b8041b_1470594461951_750505_6153) ENABLED START */
    // TODO: put your further code here
    /* PROTECTED REGION END */

}
