<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
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
class Team extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * @var \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    protected $club;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\TeamMembership>
     * @lazy
     */
    protected $teammates;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\DirectorMembership>
     * @lazy
     */
    protected $directors;

    /**
     * Get accessor for name.
     *
     * @return string
     */
    public function getName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427322898753_144846_5562) START */
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
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427322898753_144846_5562) START */
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
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427322954120_643750_5572) START */
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
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427322954120_643750_5572) START */
        $this->shortName = $shortName;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for club.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    public function getClub()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_3_16b8041b_1427812942192_793390_7942) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_3_16b8041b_1427812942192_793390_7942) START */
        $this->club = $club;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for teammates.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\TeamMembership>
     */
    public function getTeammates()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_3_16b8041b_1445778474252_384766_7015) START */
        return $this->teammates;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for teammates.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\TeamMembership> $teammates
     * @return void
     */
    public function setTeammates(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $teammates = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_3_16b8041b_1445778474252_384766_7015) START */
        $this->teammates = $teammates;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for teammates.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\TeamMembership $toAdd
     * @return void
     */
    public function addTeammates(\NicoHerbigIo\Clubman\Domain\Model\TeamMembership $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_3_16b8041b_1445778474252_384766_7015) START */
        $this->teammates->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for teammates.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\TeamMembership $toRemove
     * @return void
     */
    public function removeTeammates(\NicoHerbigIo\Clubman\Domain\Model\TeamMembership $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_3_16b8041b_1445778474252_384766_7015) START */
        $this->teammates->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for directors.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\DirectorMembership>
     */
    public function getDirectors()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1470389011077_876896_7047) START */
        return $this->directors;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for directors.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\DirectorMembership> $directors
     * @return void
     */
    public function setDirectors(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $directors = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1470389011077_876896_7047) START */
        $this->directors = $directors;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for directors.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\DirectorMembership $toAdd
     * @return void
     */
    public function addDirectors(\NicoHerbigIo\Clubman\Domain\Model\DirectorMembership $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1470389011077_876896_7047) START */
        $this->directors->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for directors.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\DirectorMembership $toRemove
     * @return void
     */
    public function removeDirectors(\NicoHerbigIo\Clubman\Domain\Model\DirectorMembership $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1470389011077_876896_7047) START */
        $this->directors->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
    /* PROTECTED REGION END */

}
