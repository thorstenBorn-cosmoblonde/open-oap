<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,intro_text,teaser_text,emails,fe_user_exceptions',
        'iconfile' => 'EXT:open_oap/Resources/Public/Icons/oap_model.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'call_group, supporter, title, intro_text, teaser_text, shortcut, emails, call_start_time, call_end_time, proposal_pid, form_pages, items, word_header_logo, word_styles, logo,blocked_languages,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, usergroup, starttime, endtime, --div--;LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.survey_tab,anonym, survey_codes'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_openoap_domain_model_call',
                'foreign_table_where' => 'AND {#tx_openoap_domain_model_call}.{#pid}=###CURRENT_PID### AND {#tx_openoap_domain_model_call}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'default' => 1,
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'categories' => [
            'config'=> [
                'type' => 'category',
            ],
        ],

        'title' => [
            'exclude' => false,
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => '',
            ],
        ],
        'intro_text' => [
            'exclude' => false,
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.intro_text',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],

        ],
        'teaser_text' => [
            'exclude' => false,
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.teaser_text',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'shortcut' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.shortcut',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'emails' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.emails',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'call_start_time' => [
            'exclude' => false,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.call_start_time',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'call_end_time' => [
            'exclude' => false,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.call_end_time',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'fe_user_exceptions' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.fe_user_exceptions',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'proposal_pid' => [
            'exclude' => false,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.proposal_pid',
            'config' => [
                'type' => 'select',
                'readOnly' => false,
                'renderType' => 'selectSingle',
                'itemsProcFunc' => \OpenOAP\OpenOap\UserFunctions\FormEngine\DescendantsSelectItemsProcFunc::class .'->getPoolPages',
                'minitems' => 0,
                'maxitems' => 1,
                'size' => 1,
//                'foreign_table' => 'pages',
//                'foreign_table_where' => 'AND {#pages}.pid=###PAGE_TSCONFIG_ID### AND {#pages}.hidden = 0 AND {#pages}.{#sys_language_uid} IN (-1,0)',
//                'type' => 'user',
//                'renderType' => 'specialField'
            ],
        ],
        'form_pages' => [
            'exclude' => false,
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.form_pages',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_openoap_domain_model_formpage',
                'MM' => 'tx_openoap_call_formpage_mm',
//                'foreign_table_where' ist replaced by itemsProcFunc
//                'foreign_table_where' => 'AND {#tx_openoap_domain_model_formpage}.pid=###PAGE_TSCONFIG_ID### AND {#tx_openoap_domain_model_formpage}.hidden = 0 AND {#tx_openoap_domain_model_formpage}.{#sys_language_uid} IN (-1,0)',
                'itemsProcFunc' => \OpenOAP\OpenOap\UserFunctions\FormEngine\DescendantsSelectItemsProcFunc::class .'->getAllElementsOfFormPages',
                'itemsProcConfig' => [
                    'model' => 'formpage',
                    'pidRoot' => 'pidFormPages'
                ],
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false
                        ,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                        'options' => [
                            'pid' => '###PAGE_TSCONFIG_ID###',
                        ],
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'items' => [
            'exclude' => false,
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.form_items',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_openoap_domain_model_formitem',
                'MM' => 'tx_openoap_call_formitem_mm',
//                'foreign_table_where' ist replaced by itemsProcFunc
//                'foreign_table_where' => 'AND {#tx_openoap_domain_model_formitem}.pid=###PAGE_TSCONFIG_ID### AND {#tx_openoap_domain_model_formitem}.hidden = 0 AND {#tx_openoap_domain_model_formitem}.{#sys_language_uid} IN (-1,0) AND {#tx_openoap_domain_model_formitem}.{#type} = ###PAGE_TSCONFIG_STR###',
                'itemsProcFunc' => \OpenOAP\OpenOap\UserFunctions\FormEngine\DescendantsSelectItemsProcFunc::class .'->getAllElementsOfFormItems',
                'itemsProcConfig' => [
                    'model' => 'formitem',
                    'pidRoot' => 'pidFormItems'
                ],

                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                        'options' => [
                            'pid' => '###PAGE_TSCONFIG_ID###',
                        ],
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'usergroup' => [
            'exclude' => false,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_db.xlf:fe_users.usergroup',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'fe_groups',
                'size' => 6,
                'minitems' => 1,
            ],
        ],
        'word_styles' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.word_styles',
            'config' => [
                'type' => 'text',
                'cols' => 50,
                'rows' => 40,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'word_template' => [
            'exclude' => true,
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.word_template',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'word_template',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
                        'collapseAll' => true,
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'word_template',
                        'tablenames' => 'tx_openoap_domain_model_call',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1,
                ],
                'docx'
            ),

        ],
        'logo' =>[
            'exclude' => true,
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.logo',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'logo',
                [
                    'maxitems' => 1,
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => 'alternative,crop,--palette--;;filePalette',
                            ],
                        ],
                        'columns' => [],
                    ],
                ],
                'gif,jpg,jpeg,png,svg'
            ),
        ],
        'word_header_logo' =>[
            'exclude' => true,
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.word_header_logo',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'word_header_logo',
                [
                    'maxitems' => 1,
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => 'alternative,crop,--palette--;;filePalette',
                            ],
                        ],
                        'columns' => [],
                    ],
                ],
                'gif,jpg,jpeg,png'
            ),
        ],
        'blocked_languages' =>[
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.blocked_languages',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'items' => [
                    [
                        'English',
                        0,
                    ],
                    [
                        'Deutsch',
                        1,
                    ],
                ],
                'size' => 3,
                'autoSizeMax' => 10,
                'multiple' => true,
            ],
        ],
        'anonym' => [
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.anonym',
            'description' => 'renderType=checkboxToggle single',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.anonym_item_checked',
                        'labelChecked' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.anonym_item_checked',
                        'labelUnchecked' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.anonym_item_unchecked',
                    ],
                ],
            ],
        ],
        'survey_codes' => [
            'exclude' => false,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.survey_codes',
            'config' => [
                'type' => 'text',
                'cols' => 50,
                'rows' => 40,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'call_group' =>[
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.call_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_openoap_domain_model_callgroup',
                'foreign_table_where' => 'AND {#tx_openoap_domain_model_callgroup}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'supporter' =>[
            'l10n_display' => 'defaultAsReadonly',
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:open_oap/Resources/Private/Language/locallang_db.xlf:tx_openoap_domain_model_call.supporter',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                    ['GIZ', 1],
                    ['DEG', 2],
                ],
            ],
        ],
    ],
];
