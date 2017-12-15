<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_3_16b8041b_1445776281997_481470_6925) ENABLED START */
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
class TeamMembership extends \NicoHerbigIo\Clubman\Domain\Model\AbstractMembership
{

    /**
     * @var string
     */
    protected $number;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Team
     */
    protected $team;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\TeamPosition
     */
    protected $position;

    /**
     * Get accessor for number.
     *
     * @return string
     */
    public function getNumber()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463675073099_130516_6654) START */
        return $this->number;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for number.
     *
     * @param string $number
     * @return void
     */
    public function setNumber($number)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463675073099_130516_6654) START */
        $this->number = $number;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for team.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Team
     */
    public function getTeam()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_3_16b8041b_1445778474253_486158_7016) START */
        return $this->team;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for team.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Team $team
     * @return void
     */
    public function setTeam(\NicoHerbigIo\Clubman\Domain\Model\Team $team)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_3_16b8041b_1445778474253_486158_7016) START */
        $this->team = $team;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for position.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\TeamPosition
     */
    public function getPosition()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_3_16b8041b_1445787977703_866708_8324) START */
        return $this->position;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for position.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\TeamPosition $position
     * @return void
     */
    public function setPosition(\NicoHerbigIo\Clubman\Domain\Model\TeamPosition $position = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_3_16b8041b_1445787977703_866708_8324) START */
        $this->position = $position;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_3_16b8041b_1445776281997_481470_6925) ENABLED START */
    /* PROTECTED REGION END */

}
