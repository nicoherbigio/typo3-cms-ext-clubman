<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
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
class Address extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var boolean
     */
    protected $isCorrespondence;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $streetNumber;

    /**
     * @var string
     */
    protected $roomNumber;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $locality;

    /**
     * @var string
     */
    protected $subLocality;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\AddressType
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
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1462699604805_349825_6366) START */
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
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1462699604805_349825_6366) START */
        $this->isCorrespondence = $isCorrespondence;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for street.
     *
     * @return string
     */
    public function getStreet()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1452867893316_900575_6205) START */
        return $this->street;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for street.
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1452867893316_900575_6205) START */
        $this->street = $street;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for streetNumber.
     *
     * @return string
     */
    public function getStreetNumber()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1452867897433_817259_6209) START */
        return $this->streetNumber;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for streetNumber.
     *
     * @param string $streetNumber
     * @return void
     */
    public function setStreetNumber($streetNumber)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1452867897433_817259_6209) START */
        $this->streetNumber = $streetNumber;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for roomNumber.
     *
     * @return string
     */
    public function getRoomNumber()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1452872612278_741826_6398) START */
        return $this->roomNumber;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for roomNumber.
     *
     * @param string $roomNumber
     * @return void
     */
    public function setRoomNumber($roomNumber)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1452872612278_741826_6398) START */
        $this->roomNumber = $roomNumber;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for postalCode.
     *
     * @return string
     */
    public function getPostalCode()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1452867900122_993219_6213) START */
        return $this->postalCode;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for postalCode.
     *
     * @param string $postalCode
     * @return void
     */
    public function setPostalCode($postalCode)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1452867900122_993219_6213) START */
        $this->postalCode = $postalCode;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for locality.
     *
     * @return string
     */
    public function getLocality()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1452867904195_684930_6217) START */
        return $this->locality;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for locality.
     *
     * @param string $locality
     * @return void
     */
    public function setLocality($locality)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1452867904195_684930_6217) START */
        $this->locality = $locality;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for subLocality.
     *
     * @return string
     */
    public function getSubLocality()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1453226033226_52998_6134) START */
        return $this->subLocality;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for subLocality.
     *
     * @param string $subLocality
     * @return void
     */
    public function setSubLocality($subLocality)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1453226033226_52998_6134) START */
        $this->subLocality = $subLocality;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for country.
     *
     * @return string
     */
    public function getCountry()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463643685304_925656_6279) START */
        return $this->country;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for country.
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463643685304_925656_6279) START */
        $this->country = $country;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for type.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\AddressType
     */
    public function getType()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462443386016_566123_6054) START */
        return $this->type;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for type.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\AddressType $type
     * @return void
     */
    public function setType(\NicoHerbigIo\Clubman\Domain\Model\AddressType $type = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462443386016_566123_6054) START */
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
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462443316472_151585_6000) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462443316472_151585_6000) START */
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
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463134001103_568270_7023) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463134001103_568270_7023) START */
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
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645689176_501801_7090) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645689176_501801_7090) START */
        $this->contactPerson = $contactPerson;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
    /* PROTECTED REGION END */

}
