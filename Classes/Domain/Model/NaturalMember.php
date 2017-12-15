<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1463133656088_299034_6707) ENABLED START */
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
class NaturalMember extends \NicoHerbigIo\Clubman\Domain\Model\Member
{

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Gender
     */
    protected $gender;

    /**
     * @var string
     */
    protected $academicDegree;

    /**
     * @var string
     */
    protected $formOfAddress;

    /**
     * @var \DateTime
     */
    protected $birthday;

    /**
     * @var string
     */
    protected $nameOfCompany;

    /**
     * @var string
     */
    protected $positionInCompany;

    /**
     * @var string
     */
    protected $formOfEmployment;

    /**
     * Get accessor for lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427322925394_877975_5566) START */
        return $this->lastName;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for lastName.
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427322925394_877975_5566) START */
        $this->lastName = $lastName;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427322912188_441380_5564) START */
        return $this->firstName;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for firstName.
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427322912188_441380_5564) START */
        $this->firstName = $firstName;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for gender.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Gender
     */
    public function getGender()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1445783193387_369009_7960) START */
        return $this->gender;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for gender.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Gender $gender
     * @return void
     */
    public function setGender(\NicoHerbigIo\Clubman\Domain\Model\Gender $gender = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1445783193387_369009_7960) START */
        $this->gender = $gender;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for academicDegree.
     *
     * @return string
     */
    public function getAcademicDegree()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427817874449_485160_8521) START */
        return $this->academicDegree;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for academicDegree.
     *
     * @param string $academicDegree
     * @return void
     */
    public function setAcademicDegree($academicDegree = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427817874449_485160_8521) START */
        $this->academicDegree = $academicDegree;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for formOfAddress.
     *
     * @return string
     */
    public function getFormOfAddress()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1453225553728_751994_6100) START */
        return $this->formOfAddress;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for formOfAddress.
     *
     * @param string $formOfAddress
     * @return void
     */
    public function setFormOfAddress($formOfAddress = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1453225553728_751994_6100) START */
        $this->formOfAddress = $formOfAddress;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for birthday.
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1462393212647_51443_6743) START */
        return $this->birthday;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for birthday.
     *
     * @param \DateTime $birthday
     * @return void
     */
    public function setBirthday(\DateTime $birthday = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1462393212647_51443_6743) START */
        $this->birthday = $birthday;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for nameOfCompany.
     *
     * @return string
     */
    public function getNameOfCompany()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463646475664_574659_7260) START */
        return $this->nameOfCompany;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for nameOfCompany.
     *
     * @param string $nameOfCompany
     * @return void
     */
    public function setNameOfCompany($nameOfCompany)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463646475664_574659_7260) START */
        $this->nameOfCompany = $nameOfCompany;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for positionInCompany.
     *
     * @return string
     */
    public function getPositionInCompany()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463646569840_227936_7264) START */
        return $this->positionInCompany;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for positionInCompany.
     *
     * @param string $positionInCompany
     * @return void
     */
    public function setPositionInCompany($positionInCompany)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463646569840_227936_7264) START */
        $this->positionInCompany = $positionInCompany;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for formOfEmployment.
     *
     * @return string
     */
    public function getFormOfEmployment()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463646601169_88182_7266) START */
        return $this->formOfEmployment;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for formOfEmployment.
     *
     * @param string $formOfEmployment
     * @return void
     */
    public function setFormOfEmployment($formOfEmployment)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463646601169_88182_7266) START */
        $this->formOfEmployment = $formOfEmployment;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1463133656088_299034_6707) ENABLED START */
    /* PROTECTED REGION END */

}
