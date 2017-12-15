<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_organ',
        'label' => 'name',
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_organ.svg',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'name, short_name',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'name, short_name, members, club',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_organ.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 200,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323359468_376952_6481) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323359468_376952_6481) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'short_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_organ.short_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323361481_522595_6485) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323361481_522595_6485) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'members' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_organ.members',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_organmembership',
                'foreign_field' => 'organ',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323564060_586107_6570) ENABLED START */
                'foreign_sortby' => 'sorting',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323564060_586107_6570) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'club' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_organ.club',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_clubman_domain_model_club',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323906546_382642_6776) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470323265695_52451_6458._18_0_5_16b8041b_1470323906546_382642_6776) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'name, short_name, members, club',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
            'showitem' => '
                    club,
                    --palette--;;core_data,
                --div--;Mitgliedschaften,
                    members,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
        'core_data' => [
            'showitem' => '
                name, short_name, --linebreak--,
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_5_16b8041b_1470323265695_52451_6458) ENABLED START */
    /* PROTECTED REGION END */
];
