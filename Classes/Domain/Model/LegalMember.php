<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1463133671005_50507_6712) ENABLED START */
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
class LegalMember extends \NicoHerbigIo\Clubman\Domain\Model\Member
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\ContactPerson>
     */
    protected $contactPersons;

    /**
     * Get accessor for name.
     *
     * @return string
     */
    public function getName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463133796633_467553_6981) START */
        return $this->name;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for name.
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463133796633_467553_6981) START */
        $this->name = $name;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for contactPersons.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\ContactPerson>
     */
    public function getContactPersons()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645486780_829045_6909) START */
        return $this->contactPersons;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for contactPersons.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\ContactPerson> $contactPersons
     * @return void
     */
    public function setContactPersons(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contactPersons = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645486780_829045_6909) START */
        $this->contactPersons = $contactPersons;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for contactPersons.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\ContactPerson $toAdd
     * @return void
     */
    public function addContactPersons(\NicoHerbigIo\Clubman\Domain\Model\ContactPerson $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463645486780_829045_6909) START */
        $this->contactPersons->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for contactPersons.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\ContactPerson $toRemove
     * @return void
     */
    public function removeContactPersons(\NicoHerbigIo\Clubman\Domain\Model\ContactPerson $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463645486780_829045_6909) START */
        $this->contactPersons->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1463133671005_50507_6712) ENABLED START */
    /* PROTECTED REGION END */

}
