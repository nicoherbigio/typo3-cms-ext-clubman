<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club',
        'label' => 'name',
        'iconfile' => 'EXT:clubman/Resources/Public/Backend/Icons/tx_clubman_domain_model_club.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'searchFields' => 'name, short_name, number',
        'dividers2tabs' => 1,
        /* PROTECTED REGION ID(tca.php.own.ctrl.section.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
        'default_sortby' => 'ORDER BY name',
		/* PROTECTED REGION END */
    ],
    'interface' => [
        'showRecordFieldList' => 'name, short_name, number, teams, addresses, telephones, emails, websites, members, organs',
        /* PROTECTED REGION ID(tca.php.own.interface.section.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
		/* PROTECTED REGION END */
    ],
    'columns' => [
        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 200,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_3_16b8041b_1427812136810_953095_7667) ENABLED START */
                'eval' => 'required, trim',
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_3_16b8041b_1427812136810_953095_7667) ENABLED START */
			/* PROTECTED REGION END */
        ],
        'short_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.short_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 50,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_3_16b8041b_1427812161909_226637_7669) ENABLED START */
				/* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_3_16b8041b_1427812161909_226637_7669) ENABLED START */
			/* PROTECTED REGION END */
        ],
        'number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 20,
                'eval' => 'trim',
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1463588038396_940799_6247) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1463588038396_940799_6247) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'teams' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.teams',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_team',
                'foreign_field' => 'club',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_3_16b8041b_1427812942192_108510_7941) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_3_16b8041b_1427812942192_108510_7941) ENABLED START */
			/* PROTECTED REGION END */
        ],
        'addresses' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.addresses',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_address',
                'foreign_field' => 'club',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462443316472_737151_5999) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462443316472_737151_5999) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'telephones' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.telephones',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_telephone',
                'foreign_field' => 'club',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462700288440_142471_6640) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462700288440_142471_6640) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'emails' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.emails',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_email',
                'foreign_field' => 'club',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462700350452_478747_6695) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462700350452_478747_6695) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'websites' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.websites',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_website',
                'foreign_field' => 'club',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462700443518_65417_6750) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1462700443518_65417_6750) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'members' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.members',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_member',
                'foreign_field' => 'club',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1463246416948_302595_6009) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1463246416948_302595_6009) ENABLED START */
            /* PROTECTED REGION END */
        ],
        'organs' => [
            'exclude' => false,
            'label' => 'LLL:EXT:clubman/Resources/Private/Language/locallang_tca.xlf:domain_model_club.organs',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_clubman_domain_model_organ',
                'foreign_field' => 'club',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 999999,
                /* PROTECTED REGION ID(tca.php.own.columns.section.column.config.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1470323906546_308615_6775) ENABLED START */
                /* PROTECTED REGION END */
            ],
            /* PROTECTED REGION ID(tca.php.own.columns.section.column.code._18_0_3_16b8041b_1427811727296_159662_7564._18_0_5_16b8041b_1470323906546_308615_6775) ENABLED START */
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.columns.section.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
		/* PROTECTED REGION END */
    ],
    'types' => [
        '0' => [
            'showitem' => 'name, short_name, number, teams, addresses, telephones, emails, websites, members, organs',
            /* PROTECTED REGION ID(tca.php.own.types.section.type.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
            'showitem' => '
                    --palette--;;core_data,
                    addresses,
                    telephones,
                    emails,
                    websites,
                --div--;Mitglieder,
                    members,
                --div--;Organe,
                    organs,
                --div--;Teams,
                    teams,
            ',
            /* PROTECTED REGION END */
        ],
        /* PROTECTED REGION ID(tca.php.own.types.section.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
		/* PROTECTED REGION END */
    ],
    'palettes' => [
        /* PROTECTED REGION ID(tca.php.own.palettes.section.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
        'core_data' => [
            'showitem' => '
                number, --linebreak--,
                name, short_name, --linebreak--,
            ',
        ],
		/* PROTECTED REGION END */
    ],
    /* PROTECTED REGION ID(tca.php.own.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
	/* PROTECTED REGION END */
];
