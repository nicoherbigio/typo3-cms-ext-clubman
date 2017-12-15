<?php
namespace NicoHerbigIo\Clubman\Controller;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1470397876769_452786_7170) ENABLED START */
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
class OrganController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Repository\OrganRepository
     */
    protected $organRepository;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Repository\OrganPositionRepository
     */
    protected $organPositionRepository;

    /**
     * @param \NicoHerbigIo\Clubman\Domain\Model\Organ $organ
     * @return void
     */
    public function showAction(\NicoHerbigIo\Clubman\Domain\Model\Organ $organ = null)
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470397876774_609087_7171) ENABLED START */
        // TODO: implementation of method showAction for class OrganController
        throw new Exception('The implementation of the method showAction for class OrganController is missing!');
        /* PROTECTED REGION END */
    }

    /**
     * @param \NicoHerbigIo\Clubman\Domain\Model\Organ $organ
     * @return void
     */
    public function showMembersAction(\NicoHerbigIo\Clubman\Domain\Model\Organ $organ = null)
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470398217641_774144_7301) ENABLED START */
        $organ = $this->organRepository->findByUid((int)$this->settings['organ']);

        $this->view->assign('organ', $organ);
        $this->view->assign('members', $organ->getMembers());
        /* PROTECTED REGION END */
    }

    /**
     * Setter Dependency Injection for organRepository.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Repository\OrganRepository $organRepository
     * @return void
     */
    public function injectOrganRepository(\NicoHerbigIo\Clubman\Domain\Repository\OrganRepository $organRepository)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470397876775_774437_7174) START */
        $this->organRepository = $organRepository;
        /* PROTECTED REGION END */
    }

    /**
     * Setter Dependency Injection for organPositionRepository.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Repository\OrganPositionRepository $organPositionRepository
     * @return void
     */
    public function injectOrganPositionRepository(\NicoHerbigIo\Clubman\Domain\Repository\OrganPositionRepository $organPositionRepository)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470397876775_314230_7175) START */
        $this->organPositionRepository = $organPositionRepository;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1470397876769_452786_7170) ENABLED START */
    // TODO: put your further code here
    /* PROTECTED REGION END */

}
