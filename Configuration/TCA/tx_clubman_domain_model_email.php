<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_email',
        'label' => 'email',
        'hideTable' => true,
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_email.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'is_correspondence, email',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_5_16b8041b_1462699524705_127812_6279) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'is_correspondence, email, type, club, member, contact_person',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_5_16b8041b_1462699524705_127812_6279) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'is_correspondence' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_email.is_correspondence',
            'config' => [
                'type' => 'check',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462699893501_91839_6393) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462699893501_91839_6393) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'email' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_email.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462699984724_120633_6474) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462699984724_120633_6474) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'type' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_email.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_clubman_domain_model_emailtype',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462700091716_504346_6531) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462700091716_504346_6531) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'club' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_email.club',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_clubman_domain_model_club',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462700350452_642384_6696) ENABLED START */
                // TODO: put your further column config code here
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1462700350452_642384_6696) ENABLED START */
            // TODO: put your further column code here
            /* PROTECTED REGION END */
        ],
        'member' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_email.member',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_clubman_domain_model_member',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1463134008377_459252_7089) ENABLED START */
                // TODO: put your further column config code here
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1463134008377_459252_7089) ENABLED START */
            // TODO: put your further column code here
            /* PROTECTED REGION END */
        ],
        'contact_person' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_email.contact_person',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_clubman_domain_model_contactperson',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1463645677203_827949_7024) ENABLED START */
                // TODO: put your further column config code here
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462699524705_127812_6279._18_0_5_16b8041b_1463645677203_827949_7024) ENABLED START */
            // TODO: put your further column code here
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_5_16b8041b_1462699524705_127812_6279) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'is_correspondence, email, type, club, member, contact_person',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1462699524705_127812_6279) ENABLED START */
            'showitem' => '
                    --palette--;;core_data,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_5_16b8041b_1462699524705_127812_6279) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_5_16b8041b_1462699524705_127812_6279) ENABLED START */
        'core_data' => [
            'showitem' => '
                is_correspondence, type, --linebreak--,
                email
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_5_16b8041b_1462699524705_127812_6279) ENABLED START */
    /* PROTECTED REGION END */
];
