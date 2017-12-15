<?php
namespace NicoHerbigIo\Clubman\Controller;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1463826016503_193664_6062) ENABLED START */
// TODO: put your further use imports here
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
class MemberController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Repository\MemberRepository
     */
    protected $memberRepository;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Repository\NaturalMemberRepository
     */
    protected $naturalMemberRepository;

    /**
     * @return void
     */
    public function listAction()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1464033927770_142145_6318) ENABLED START */
        DebuggerUtility::var_dump($this->memberRepository->findByUid(2));
        /* PROTECTED REGION END */
    }

    /**
     * Setter Dependency Injection for memberRepository.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Repository\MemberRepository $memberRepository
     * @return void
     */
    public function injectMemberRepository(\NicoHerbigIo\Clubman\Domain\Repository\MemberRepository $memberRepository)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1470314698946_446814_6222) START */
        $this->memberRepository = $memberRepository;
        /* PROTECTED REGION END */
    }

    /**
     * Setter Dependency Injection for naturalMemberRepository.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Repository\NaturalMemberRepository $naturalMemberRepository
     * @return void
     */
    public function injectNaturalMemberRepository(\NicoHerbigIo\Clubman\Domain\Repository\NaturalMemberRepository $naturalMemberRepository)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463826094161_726563_6109) START */
        $this->naturalMemberRepository = $naturalMemberRepository;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1463826016503_193664_6062) ENABLED START */
    /* PROTECTED REGION END */

}
