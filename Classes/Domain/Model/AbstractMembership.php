<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1470536486595_769306_6430) ENABLED START */
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
abstract class AbstractMembership extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity implements \NicoHerbigIo\Clubman\Domain\Model\SortableInterface
{

    /**
     * @var int
     */
    protected $sorting;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Member
     */
    protected $member;

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\AbstractPosition
     */
    abstract public function getPosition();

    /**
     * @return string
     */
    public function getGenderedPosition()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470418713810_921800_6283) ENABLED START */
        $position = $this->getPosition();
        $genderedPosition = null;

        if ($position !== null) {
            if ($this->member instanceof \NicoHerbigIo\Clubman\Domain\Model\NaturalMember) {
                $genderedPosition = $position->getGenderedLabel($this->member->getGender());
            } else {
                $genderedPosition = $position->getLabel();
            }
        }
        return $genderedPosition;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for sorting.
     *
     * @return int
     */
    public function getSorting()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1471968467988_150427_6379) START */
        return $this->sorting;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for sorting.
     *
     * @param int $sorting
     * @return void
     */
    public function setSorting($sorting)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1471968467988_150427_6379) START */
        $this->sorting = $sorting;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for description.
     *
     * @return string
     */
    public function getDescription()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1471432034356_905817_6290) START */
        return $this->description;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for description.
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1471432034356_905817_6290) START */
        $this->description = $description;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for member.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Member
     */
    public function getMember()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1470323652731_552331_6650) START */
        return $this->member;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for member.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Member $member
     * @return void
     */
    public function setMember(\NicoHerbigIo\Clubman\Domain\Model\Member $member)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1470323652731_552331_6650) START */
        $this->member = $member;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1470536486595_769306_6430) ENABLED START */
    /* PROTECTED REGION END */

}
