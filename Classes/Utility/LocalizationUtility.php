<?php
namespace NicoHerbigIo\Clubman\Utility;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_3_16b8041b_1427039393743_829772_6508) ENABLED START */
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
class LocalizationUtility
{

    /**
     * Returns the localized label of the LOCAL_LANG key, $key.
     *
     * @param string $key The key from the LOCAL_LANG array for which to return the value.
     * @param array $arguments The arguments of the extension, being passed over to vsprintf.
     * @return string The value from LOCAL_LANG or NULL if no translation was found.
     */
    public static function translate($key, array $arguments)
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_3_16b8041b_1427039393892_486057_6919) ENABLED START */
        $extensionName = ExtensionUtility::EXTENSION_NAME;

        return \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate($key, $extensionName, $arguments);
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_3_16b8041b_1427039393743_829772_6508) ENABLED START */
    /* PROTECTED REGION END */

}
