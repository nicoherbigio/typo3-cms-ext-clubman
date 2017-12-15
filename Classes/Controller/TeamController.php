<?php
namespace NicoHerbigIo\Clubman\Controller;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1463691794150_460661_6323) ENABLED START */
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
class TeamController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Repository\TeamRepository
     */
    protected $teamRepository;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Repository\TeamPositionRepository
     */
    protected $teamPositionRepository;

    /**
     * @param \NicoHerbigIo\Clubman\Domain\Model\Team $team
     * @return void
     */
    public function showAction(\NicoHerbigIo\Clubman\Domain\Model\Team $team = null)
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463692443007_306787_6428) ENABLED START */
        /* PROTECTED REGION END */
    }

    /**
     * @param \NicoHerbigIo\Clubman\Domain\Model\Team $team
     * @return void
     */
    public function showTeammatesAction(\NicoHerbigIo\Clubman\Domain\Model\Team $team = null)
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470397821341_202267_7159) ENABLED START */
        /** @var \NicoHerbigIo\Clubman\Domain\Model\Team $team */
        $team = $this->teamRepository->findByUid((int)$this->settings['team']);

        $this->view->assign('team', $team);
        $this->view->assign('teammates', $team->getTeammates());
        /* PROTECTED REGION END */
    }

    /**
     * @param \NicoHerbigIo\Clubman\Domain\Model\Team $team
     * @return void
     */
    public function showDirectorsAction(\NicoHerbigIo\Clubman\Domain\Model\Team $team = null)
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470397839894_345705_7163) ENABLED START */
        /** @var \NicoHerbigIo\Clubman\Domain\Model\Team $team */
        $team = $this->teamRepository->findByUid((int)$this->settings['team']);

        $this->view->assign('team', $team);
        $this->view->assign('directors', $team->getDirectors());
        /* PROTECTED REGION END */
    }

    /**
     * Setter Dependency Injection for teamRepository.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Repository\TeamRepository $teamRepository
     * @return void
     */
    public function injectTeamRepository(\NicoHerbigIo\Clubman\Domain\Repository\TeamRepository $teamRepository)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463692367797_83262_6423) START */
        $this->teamRepository = $teamRepository;
        /* PROTECTED REGION END */
    }

    /**
     * Setter Dependency Injection for teamPositionRepository.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Repository\TeamPositionRepository $teamPositionRepository
     * @return void
     */
    public function injectTeamPositionRepository(\NicoHerbigIo\Clubman\Domain\Repository\TeamPositionRepository $teamPositionRepository)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1464121333469_758935_6461) START */
        $this->teamPositionRepository = $teamPositionRepository;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1463691794150_460661_6323) ENABLED START */
    /* PROTECTED REGION END */

}
