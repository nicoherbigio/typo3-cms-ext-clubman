<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
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
class Organ extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $shortName;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\OrganMembership>
     */
    protected $members;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    protected $club;

    /**
     * Get accessor for name.
     *
     * @return string
     */
    public function getName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1470323359468_376952_6481) START */
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
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470323359468_376952_6481) START */
        $this->name = $name;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for shortName.
     *
     * @return string
     */
    public function getShortName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1470323361481_522595_6485) START */
        return $this->shortName;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for shortName.
     *
     * @param string $shortName
     * @return void
     */
    public function setShortName($shortName = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470323361481_522595_6485) START */
        $this->shortName = $shortName;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for members.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\OrganMembership>
     */
    public function getMembers()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1470323564060_586107_6570) START */
        return $this->members;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for members.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\OrganMembership> $members
     * @return void
     */
    public function setMembers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $members = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1470323564060_586107_6570) START */
        $this->members = $members;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for members.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\OrganMembership $toAdd
     * @return void
     */
    public function addMembers(\NicoHerbigIo\Clubman\Domain\Model\OrganMembership $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1470323564060_586107_6570) START */
        $this->members->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for members.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\OrganMembership $toRemove
     * @return void
     */
    public function removeMembers(\NicoHerbigIo\Clubman\Domain\Model\OrganMembership $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1470323564060_586107_6570) START */
        $this->members->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for club.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    public function getClub()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1470323906546_382642_6776) START */
        return $this->club;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for club.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Club $club
     * @return void
     */
    public function setClub(\NicoHerbigIo\Clubman\Domain\Model\Club $club)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1470323906546_382642_6776) START */
        $this->club = $club;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
    /* PROTECTED REGION END */

}
