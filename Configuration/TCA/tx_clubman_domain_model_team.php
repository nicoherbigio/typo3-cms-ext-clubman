<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_team',
        'label' => 'name',
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_team.svg',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'name, short_name',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'name, short_name, club, teammates, directors',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_team.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 200,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1427322898753_144846_5562) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1427322898753_144846_5562) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'short_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_team.short_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1427322954120_643750_5572) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1427322954120_643750_5572) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'club' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_team.club',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_clubman_domain_model_club',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1427812942192_793390_7942) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1427812942192_793390_7942) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'teammates' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_team.teammates',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_teammembership',
                'foreign_field' => 'team',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1445778474252_384766_7015) ENABLED START */
                'foreign_sortby' => 'sorting',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_3_16b8041b_1445778474252_384766_7015) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'directors' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_team.directors',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_directormembership',
                'foreign_field' => 'team',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_5_16b8041b_1470389011077_876896_7047) ENABLED START */
                'foreign_sortby' => 'sorting',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040480526_106549_7357._18_0_5_16b8041b_1470389011077_876896_7047) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'name, short_name, club, teammates, directors',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
            'showitem' => '
                    club,
                    --palette--;;core_data,
                --div--;Team-Mitgliedschaften,
                    teammates,
                --div--;Leitungs-Mitgliedschaften,
                    directors,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
        'core_data' => [
            'showitem' => '
                name, short_name, --linebreak--,
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_3_16b8041b_1427040480526_106549_7357) ENABLED START */
    /* PROTECTED REGION END */
];
