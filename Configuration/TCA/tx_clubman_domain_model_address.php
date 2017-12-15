<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address',
        'label' => 'locality',
        'label_alt' => 'street, street_number',
        'label_alt_force' => true,
        'hideTable' => true,
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_address.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'is_correspondence, street, street_number, room_number, postal_code, locality, sub_locality, country',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'is_correspondence, street, street_number, room_number, postal_code, locality, sub_locality, country, type, club, member, contact_person',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'is_correspondence' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.is_correspondence',
            'config' => [
                'type' => 'check',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1462699604805_349825_6366) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1462699604805_349825_6366) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'street' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.street',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867893316_900575_6205) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867893316_900575_6205) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'street_number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.street_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867897433_817259_6209) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867897433_817259_6209) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'room_number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.room_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452872612278_741826_6398) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452872612278_741826_6398) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'postal_code' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.postal_code',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867900122_993219_6213) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867900122_993219_6213) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'locality' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.locality',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867904195_684930_6217) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1452867904195_684930_6217) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'sub_locality' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.sub_locality',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1453226033226_52998_6134) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_3_16b8041b_1453226033226_52998_6134) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'country' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.country',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1463643685304_925656_6279) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1463643685304_925656_6279) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'type' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_clubman_domain_model_addresstype',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1462443386016_566123_6054) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1462443386016_566123_6054) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'club' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.club',
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
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1462443316472_151585_6000) ENABLED START */
                // TODO: put your further column config code here
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1462443316472_151585_6000) ENABLED START */
            // TODO: put your further column code here
            /* PROTECTED REGION END */
        ],
        'member' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.member',
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
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1463134001103_568270_7023) ENABLED START */
                // TODO: put your further column config code here
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1463134001103_568270_7023) ENABLED START */
            // TODO: put your further column code here
            /* PROTECTED REGION END */
        ],
        'contact_person' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_address.contact_person',
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
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1463645689176_501801_7090) ENABLED START */
                // TODO: put your further column config code here
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1462443181458_167201_5934._18_0_5_16b8041b_1463645689176_501801_7090) ENABLED START */
            // TODO: put your further column code here
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'is_correspondence, street, street_number, room_number, postal_code, locality, sub_locality, country, type, club, member, contact_person',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
            'showitem' => '
                    --palette--;;core_data,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
        'core_data' => [
            'showitem' => '
                is_correspondence, type, --linebreak--,
                street, street_number, room_number, --linebreak--,
                postal_code, locality, sub_locality, --linebreak--,
                country
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_5_16b8041b_1462443181458_167201_5934) ENABLED START */
    /* PROTECTED REGION END */
];
