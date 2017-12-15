<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_telephonetype',
        'label' => 'label',
        'adminOnly' => true,
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_telephonetype.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'label',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_5_16b8041b_1462699512562_969635_6257) ENABLED START */
        'default_sortby' => 'ORDER BY label',
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'label',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_5_16b8041b_1462699512562_969635_6257) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'label' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_telephonetype.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462699512562_969635_6257._18_0_5_16b8041b_1462443231889_631713_5983) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462699512562_969635_6257._18_0_5_16b8041b_1462443231889_631713_5983) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_5_16b8041b_1462699512562_969635_6257) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'label',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1462699512562_969635_6257) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_5_16b8041b_1462699512562_969635_6257) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_5_16b8041b_1462699512562_969635_6257) ENABLED START */
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_5_16b8041b_1462699512562_969635_6257) ENABLED START */
    /* PROTECTED REGION END */
];
