<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member',
        'label' => 'number',
        'label_alt' => 'last_name, first_name, name',
        'label_alt_force' => true,
        'type' => 'type',
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_member.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'number, last_name, first_name, name',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'number, date_of_joining, date_of_leaving, picture, frontend_user, addresses, telephones, emails, websites, club',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'columns' => [
        'type' => [
            'label' => 'Type',
            'config' => [
                'type' =>'select',
                'items' => [
                    ['LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member', '0'],
                    ['LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember', 'NicoHerbigIo\Clubman\Domain\Model\NaturalMember'],
                    ['LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_legalmember', 'NicoHerbigIo\Clubman\Domain\Model\LegalMember'],
                ],
                'default' => '0',
            ],
        ],
        'number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463133759464_105593_6977) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463133759464_105593_6977) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'date_of_joining' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.date_of_joining',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'default' => 0,
                'eval' => 'date',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463643948650_981940_6297) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463643948650_981940_6297) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'date_of_leaving' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.date_of_leaving',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'default' => 0,
                'eval' => 'date',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463647769093_84698_7268) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463647769093_84698_7268) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'picture' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.picture',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('picture', [
            	'minitems' => 0,
            	'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1454056737260_374451_6267) ENABLED START */
                /* PROTECTED REGION END */
            ], '', ''),
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1454056737260_374451_6267) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'last_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1427322925394_877975_5566) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1427322925394_877975_5566) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'first_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1427322912188_441380_5564) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1427322912188_441380_5564) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'gender' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.gender',
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
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1445783193387_369009_7960) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1445783193387_369009_7960) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'academic_degree' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.academic_degree',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1427817874449_485160_8521) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1427817874449_485160_8521) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'form_of_address' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.form_of_address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1453225553728_751994_6100) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_3_16b8041b_1453225553728_751994_6100) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'birthday' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.birthday',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'default' => 0,
                'eval' => 'date',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1462393212647_51443_6743) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1462393212647_51443_6743) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'name_of_company' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.name_of_company',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1463646475664_574659_7260) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1463646475664_574659_7260) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'position_in_company' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.position_in_company',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1463646569840_227936_7264) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1463646569840_227936_7264) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'form_of_employment' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_naturalmember.form_of_employment',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1463646601169_88182_7266) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133656088_299034_6707._18_0_5_16b8041b_1463646601169_88182_7266) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_legalmember.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 100,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133671005_50507_6712._18_0_5_16b8041b_1463133796633_467553_6981) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133671005_50507_6712._18_0_5_16b8041b_1463133796633_467553_6981) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'frontend_user' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.frontend_user',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'fe_users',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_3_16b8041b_1428077896230_533563_5642) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_3_16b8041b_1428077896230_533563_5642) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'addresses' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.addresses',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_address',
                'foreign_field' => 'member',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134001102_835571_7022) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134001102_835571_7022) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'telephones' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.telephones',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_telephone',
                'foreign_field' => 'member',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134004829_759026_7055) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134004829_759026_7055) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'emails' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.emails',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_email',
                'foreign_field' => 'member',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134008377_17268_7088) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134008377_17268_7088) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'websites' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.websites',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_website',
                'foreign_field' => 'member',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134014305_836943_7121) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463134014305_836943_7121) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'club' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_member.club',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_clubman_domain_model_club',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463246416948_55375_6010) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427040492147_818624_7401._18_0_5_16b8041b_1463246416948_55375_6010) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'contact_persons' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_legalmember.contact_persons',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_contactperson',
                'foreign_field' => 'legal_member',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_5_16b8041b_1463133671005_50507_6712._18_0_5_16b8041b_1463645486780_829045_6909) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_5_16b8041b_1463133671005_50507_6712._18_0_5_16b8041b_1463645486780_829045_6909) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'type, number, date_of_joining, date_of_leaving, picture, frontend_user, addresses, telephones, emails, websites, club',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
            'showitem' => '
                    type,
            ',
            /* PROTECTED REGION END */
        ],
        'NicoHerbigIo\Clubman\Domain\Model\NaturalMember' => [
            'showitem' => 'type, number, date_of_joining, date_of_leaving, picture, last_name, first_name, gender, academic_degree, form_of_address, birthday, name_of_company, position_in_company, form_of_employment, frontend_user, addresses, telephones, emails, websites, club',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1463133656088_299034_6707) ENABLED START */
            'showitem' => '
                    type,
                    club,
                    --palette--;;core_data,
                    --palette--;;core_data_natural_member,
                    addresses,
                    telephones,
                    emails,
                    websites,
                --div--;TYPO3 CMS-Integration,
                    frontend_user,
            ',
            /* PROTECTED REGION END */
        ],
        'NicoHerbigIo\Clubman\Domain\Model\LegalMember' => [
            'showitem' => 'type, number, date_of_joining, date_of_leaving, picture, name, frontend_user, addresses, telephones, emails, websites, club, contact_persons',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_5_16b8041b_1463133671005_50507_6712) ENABLED START */
            'showitem' => '
                    type,
                    club,
                    --palette--;;core_data,
                    --palette--;;core_data_legal_member,
                    addresses,
                    telephones,
                    emails,
                    websites,
                --div--;TYPO3 CMS-Integration,
                    frontend_user,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
        /* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
        'core_data' => [
            'showitem' => '
                number, date_of_joining, date_of_leaving,
            ',
        ],
        'core_data_natural_member' => [
            'showitem' => '
                gender, --linebreak--,
                academic_degree, form_of_address, --linebreak--,
                first_name, last_name, --linebreak--,
                birthday, --linebreak--,
                picture, --linebreak--,
                name_of_company, position_in_company, --linebreak--,
                form_of_employment,
            ',
        ],
        'core_data_legal_member' => [
            'showitem' => '
                name, --linebreak--,
                picture,
            ',
        ],
        /* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
    // TODO: put your further code here
    /* PROTECTED REGION END */
];
