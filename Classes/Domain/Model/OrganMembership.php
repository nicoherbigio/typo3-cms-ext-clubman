<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1470323537598_771862_6540) ENABLED START */
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
class OrganMembership extends \NicoHerbigIo\Clubman\Domain\Model\AbstractMembership
{

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Organ
     */
    protected $organ;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\OrganPosition
     */
    protected $position;

    /**
     * Get accessor for organ.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Organ
     */
    public function getOrgan()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1470323564060_76943_6571) START */
        return $this->organ;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for organ.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Organ $organ
     * @return void
     */
    public function setOrgan(\NicoHerbigIo\Clubman\Domain\Model\Organ $organ)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1470323564060_76943_6571) START */
        $this->organ = $organ;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for position.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\OrganPosition
     */
    public function getPosition()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1470323683389_662013_6699) START */
        return $this->position;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for position.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\OrganPosition $position
     * @return void
     */
    public function setPosition(\NicoHerbigIo\Clubman\Domain\Model\OrganPosition $position = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1470323683389_662013_6699) START */
        $this->position = $position;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1470323537598_771862_6540) ENABLED START */
    /* PROTECTED REGION END */

}
