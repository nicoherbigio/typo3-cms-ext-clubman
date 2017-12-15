<?php
namespace NicoHerbigIo\Clubman\ViewHelpers;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1454237040598_21847_6026) ENABLED START */
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
class GravatarViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper
{

    /**
     * @var string
     */
    protected $tagName = 'img';

    /**
     * Initialize arguments.
     *
     * @return void
     */
    public function initializeArguments()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1454237133182_325864_6058) ENABLED START */
        parent::initializeArguments();
        $this->registerUniversalTagAttributes();
        $this->registerTagAttribute('alt', 'string', 'Specifies an alternate text for an Gravatar.com image', false);

        $this->registerArgument('email', 'string', 'Specifies an email for lookup at Gravatar.com database', false);
        $this->registerArgument('size', 'integer', 'Specifies the size of a Gravatar.com image', false);
        /* PROTECTED REGION END */
    }

    /**
     * @return string
     */
    public function render()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1454237059191_480951_6047) ENABLED START */
        $email = $this->arguments['email'] ? $this->arguments['email'] : $this->renderChildren();

        $gravatarUri = '//www.gravatar.com/avatar/' . md5(strtolower(trim($email))) . '.jpg' . '?d=mm&s=' . urlencode($this->arguments['size']);

        $this->tag->addAttribute('src', $gravatarUri);
        // The alt-attribute is mandatory to have valid html-code, therefore add it even if it is empty.
        if (empty($this->arguments['alt'])) {
            $this->tag->addAttribute('alt', '');
        }

        return $this->tag->render();
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1454237040598_21847_6026) ENABLED START */
    /* PROTECTED REGION END */

}
