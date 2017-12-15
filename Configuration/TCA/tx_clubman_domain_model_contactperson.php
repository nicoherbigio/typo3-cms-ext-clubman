<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson',
        'label' => 'gender',
        'hideTable' => true,
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_contactperson.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'gender, academic_degree, form_of_address, first_name, last_name, birthday, picture, position_in_company, form_of_employment',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
        'default_sortby' => 'ORDER BY last_name, first_name',
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'gender, academic_degree, form_of_address, first_name, last_name, birthday, picture, position_in_company, form_of_employment, legal_member, websites, emails, telephones, addresses',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'gender' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.gender',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['NONE', 'NONE'],
                    ['MALE', 'MALE'],
                    ['FEMALE', 'FEMALE'],
                ],
                'minitems' => 0,
                'maxitems' => 1,
                'size' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645548244_15986_6936) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645548244_15986_6936) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'academic_degree' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.academic_degree',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645563580_134517_6940) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645563580_134517_6940) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'form_of_address' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.form_of_address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645566336_375652_6944) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645566336_375652_6944) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'first_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645568654_363102_6948) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645568654_363102_6948) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'last_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645570937_679214_6952) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645570937_679214_6952) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'birthday' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.birthday',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'default' => 0,
                'eval' => 'date',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645578351_675970_6956) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645578351_675970_6956) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'picture' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.picture',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('picture', [
            	'minitems' => 0,
            	'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463646211808_248416_7170) ENABLED START */
                /* PROTECTED REGION END */
            ], '', ''),
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463646211808_248416_7170) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'position_in_company' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.position_in_company',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463648436449_328426_7276) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463648436449_328426_7276) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'form_of_employment' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.form_of_employment',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463648439193_11896_7278) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463648439193_11896_7278) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'legal_member' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.legal_member',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_clubman_domain_model_member',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645486780_241512_6910) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645486780_241512_6910) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'websites' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.websites',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_website',
                'foreign_field' => 'contact_person',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645670205_167197_6990) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645670205_167197_6990) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'emails' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.emails',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_email',
                'foreign_field' => 'contact_person',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645677203_179465_7023) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645677203_179465_7023) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'telephones' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.telephones',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_telephone',
                'foreign_field' => 'contact_person',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645680498_563118_7056) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645680498_563118_7056) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'addresses' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_contactperson.addresses',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_address',
                'foreign_field' => 'contact_person',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645689176_846163_7089) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463645486769_885489_6907._18_0_5_16b8041b_1463645689176_846163_7089) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'gender, academic_degree, form_of_address, first_name, last_name, birthday, picture, position_in_company, form_of_employment, legal_member, websites, emails, telephones, addresses',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
            'showitem' => '
                    legal_member,
                    --palette--;;core_data,
                    --palette--;;business_data,
                    addresses,
                    telephones,
                    emails,
                    websites,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
        'core_data' => [
            'showitem' => '
                gender, --linebreak--,
                academic_degree, form_of_address, --linebreak--,
                first_name, last_name, --linebreak--,
                birthday, --linebreak--,
                picture,
            ',
        ],
        'business_data' => [
            'showitem' => '
                position_in_company, form_of_employment,
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
    /* PROTECTED REGION END */
];
