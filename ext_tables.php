<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'OrganPlugin',
    'ClubMan: Organ'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['clubman_organplugin'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('clubman_organplugin', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_organplugin.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'TeamPlugin',
    'ClubMan: Team'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['clubman_teamplugin'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('clubman_teamplugin', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_teamplugin.xml');

/* PROTECTED REGION ID(ext_tables.php.own.plugin.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START */
/* PROTECTED REGION END */

if (TYPO3_MODE === 'BE') {
    /* PROTECTED REGION ID(ext_tables.php.own.module.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START */
    /* PROTECTED REGION END */
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'NicoHerbigIo Clubman Setup');

/* PROTECTED REGION ID(ext_tables.php.own.typoscript.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START */
/* PROTECTED REGION END */


/* PROTECTED REGION ID(ext_tables.php.own.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START */
/* PROTECTED REGION END */
