<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1462699429685_655128_6225) ENABLED START */
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
class Telephone extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var boolean
     */
    protected $isCorrespondence;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\TelephoneType
     */
    protected $type;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    protected $club;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Member
     */
    protected $member;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\ContactPerson
     */
    protected $contactPerson;

    /**
     * Get accessor for isCorrespondence.
     *
     * @return boolean
     */
    public function getIsCorrespondence()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1462699888049_898129_6389) START */
        return $this->isCorrespondence;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for isCorrespondence.
     *
     * @param boolean $isCorrespondence
     * @return void
     */
    public function setIsCorrespondence($isCorrespondence)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1462699888049_898129_6389) START */
        $this->isCorrespondence = $isCorrespondence;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for telephone.
     *
     * @return string
     */
    public function getTelephone()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1462699954877_982867_6422) START */
        return $this->telephone;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for telephone.
     *
     * @param string $telephone
     * @return void
     */
    public function setTelephone($telephone)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1462699954877_982867_6422) START */
        $this->telephone = $telephone;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for type.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\TelephoneType
     */
    public function getType()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462700087361_904518_6498) START */
        return $this->type;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for type.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\TelephoneType $type
     * @return void
     */
    public function setType(\NicoHerbigIo\Clubman\Domain\Model\TelephoneType $type = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462700087361_904518_6498) START */
        $this->type = $type;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for club.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    public function getClub()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462700288440_396046_6641) START */
        return $this->club;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for club.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Club $club
     * @return void
     */
    public function setClub(\NicoHerbigIo\Clubman\Domain\Model\Club $club = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462700288440_396046_6641) START */
        $this->club = $club;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for member.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Member
     */
    public function getMember()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463134004830_371776_7056) START */
        return $this->member;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for member.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Member $member
     * @return void
     */
    public function setMember(\NicoHerbigIo\Clubman\Domain\Model\Member $member = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463134004830_371776_7056) START */
        $this->member = $member;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for contactPerson.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\ContactPerson
     */
    public function getContactPerson()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645680498_32413_7057) START */
        return $this->contactPerson;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for contactPerson.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\ContactPerson $contactPerson
     * @return void
     */
    public function setContactPerson(\NicoHerbigIo\Clubman\Domain\Model\ContactPerson $contactPerson = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645680498_32413_7057) START */
        $this->contactPerson = $contactPerson;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1462699429685_655128_6225) ENABLED START */
    /* PROTECTED REGION END */

}
