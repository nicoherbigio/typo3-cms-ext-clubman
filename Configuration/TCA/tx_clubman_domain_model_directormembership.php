<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_directormembership',
        'label' => 'member',
        'label_alt' => 'position',
        'label_alt_force' => true,
        'hideTable' => true,
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_directormembership.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => '',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_5_16b8041b_1470388653851_326892_6837) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'sorting, description, member, position, team',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_5_16b8041b_1470388653851_326892_6837) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'sorting' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_abstractmembership.sorting',
            'config' => [
                'type' => 'passthrough',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1471968467988_150427_6379) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1471968467988_150427_6379) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_abstractmembership.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1471432034356_905817_6290) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1471432034356_905817_6290) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'member' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_abstractmembership.member',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_clubman_domain_model_member',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1470323652731_552331_6650) ENABLED START */
                //'foreign_table_where' => 'ORDER BY tx_clubman_domain_model_member.name',
                'wizards' => array(
                    'suggest' => array(
                        'type' => 'suggest'
                    ),
                ),
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1470323652731_552331_6650) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'position' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_directormembership.position',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_clubman_domain_model_directorposition',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1470388891151_143798_6975) ENABLED START */
                'foreign_table_where' => 'ORDER BY tx_clubman_domain_model_directorposition.sorting',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1470388891151_143798_6975) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'team' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_directormembership.team',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_clubman_domain_model_team',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1470389011077_659043_7048) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1470388653851_326892_6837._18_0_5_16b8041b_1470389011077_659043_7048) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_5_16b8041b_1470388653851_326892_6837) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'sorting, description, member, position, team',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1470388653851_326892_6837) ENABLED START */
            'showitem' => '
                    team,
                    --palette--;;core_data,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_5_16b8041b_1470388653851_326892_6837) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_5_16b8041b_1470388653851_326892_6837) ENABLED START */
        'core_data' => [
            'showitem' => '
                position, --linebreak--,
                member, --linebreak--,
                description
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_5_16b8041b_1470388653851_326892_6837) ENABLED START */
    /* PROTECTED REGION END */
];
