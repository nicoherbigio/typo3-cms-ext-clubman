<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1462699590922_247802_6345) ENABLED START */
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
class WebsiteType extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * @var string
     */
    protected $label;

    /**
     * Get accessor for label.
     *
     * @return string
     */
    public function getLabel()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1462699675159_792672_6372) START */
        return $this->label;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for label.
     *
     * @param string $label
     * @return void
     */
    public function setLabel($label)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1462699675159_792672_6372) START */
        $this->label = $label;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1462699590922_247802_6345) ENABLED START */
    /* PROTECTED REGION END */

}
