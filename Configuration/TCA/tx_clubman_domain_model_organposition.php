<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_organposition',
        'label' => 'label',
        'label_alt' => 'male_label, female_label',
        'label_alt_force' => true,
        'adminOnly' => true,
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_organposition.svg',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => '',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_5_16b8041b_1470323416806_341235_6494) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'label, male_label, female_label',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_5_16b8041b_1470323416806_341235_6494) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'label' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_abstractposition.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470323416806_341235_6494._18_0_5_16b8041b_1470323452483_824955_6516) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470323416806_341235_6494._18_0_5_16b8041b_1470323452483_824955_6516) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'male_label' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_abstractposition.male_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470323416806_341235_6494._18_0_5_16b8041b_1470323454204_972642_6520) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470323416806_341235_6494._18_0_5_16b8041b_1470323454204_972642_6520) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'female_label' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_abstractposition.female_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470323416806_341235_6494._18_0_5_16b8041b_1470323455914_913116_6524) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470323416806_341235_6494._18_0_5_16b8041b_1470323455914_913116_6524) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_5_16b8041b_1470323416806_341235_6494) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'label, male_label, female_label',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1470323416806_341235_6494) ENABLED START */
            'showitem' => '
                    --palette--;;core_data,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_5_16b8041b_1470323416806_341235_6494) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_5_16b8041b_1470323416806_341235_6494) ENABLED START */
        'core_data' => [
            'showitem' => '
                label, --linebreak--,
                male_label, female_label, team,
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_5_16b8041b_1470323416806_341235_6494) ENABLED START */
    /* PROTECTED REGION END */
];
