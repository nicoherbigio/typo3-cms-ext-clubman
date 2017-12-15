<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'NicoHerbigIo.' . $_EXTKEY,
    'OrganPlugin',
    [
        'Organ' => 'show, showMembers'
    ],
    [
    ],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_PLUGIN
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'NicoHerbigIo.' . $_EXTKEY,
    'TeamPlugin',
    [
        'Team' => 'show, showTeammates, showDirectors'
    ],
    [
    ],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_PLUGIN
);

/* PROTECTED REGION ID(ext_localconf.php.own.plugin.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START */
/* PROTECTED REGION END */

if (TYPO3_MODE === 'BE') {
    /* PROTECTED REGION ID(ext_localconf.php.own.command.controller.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START */
    /* PROTECTED REGION END */
}

/* PROTECTED REGION ID(ext_localconf.php.own.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START */
/* PROTECTED REGION END */
