<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1470534983035_306503_6355) ENABLED START */
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
abstract class AbstractPosition extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $maleLabel;

    /**
     * @var string
     */
    protected $femaleLabel;

    /**
     * @param \NicoHerbigIo\Clubman\Domain\Model\Gender $gender
     * @return string
     */
    public function getGenderedLabel(\NicoHerbigIo\Clubman\Domain\Model\Gender $gender)
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470501704492_418672_6342) ENABLED START */
        switch ($gender) {
            case Gender::cast(Gender::MALE):
                $label = $this->getMaleLabel();
                break;
            case Gender::cast(Gender::FEMALE):
                $label = $this->getFemaleLabel();
                break;
            default:
                $label = $this->getLabel();
        }
        return $label;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for label.
     *
     * @return string
     */
    public function getLabel()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1470323452483_824955_6516) START */
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
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470323452483_824955_6516) START */
        $this->label = $label;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for maleLabel.
     *
     * @return string
     */
    public function getMaleLabel()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1470323454204_972642_6520) ENABLED START */
        return $this->maleLabel !== '' ? $this->maleLabel : $this->label;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for maleLabel.
     *
     * @param string $maleLabel
     * @return void
     */
    public function setMaleLabel($maleLabel)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470323454204_972642_6520) START */
        $this->maleLabel = $maleLabel;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for femaleLabel.
     *
     * @return string
     */
    public function getFemaleLabel()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1470323455914_913116_6524) ENABLED START */
        return $this->femaleLabel !== '' ? $this->femaleLabel : $this->label;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for femaleLabel.
     *
     * @param string $femaleLabel
     * @return void
     */
    public function setFemaleLabel($femaleLabel)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470323455914_913116_6524) START */
        $this->femaleLabel = $femaleLabel;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1470534983035_306503_6355) ENABLED START */
    /* PROTECTED REGION END */

}
