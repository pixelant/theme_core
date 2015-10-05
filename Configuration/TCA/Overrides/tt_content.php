<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {

    $contentElementLanguageFilePrefix = 'LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
    $cmsLanguageFilePrefix = 'LLL:EXT:cms/locallang_ttc.xlf:';

    //
    // CTypes
    //
    // "accordion"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $contentElementLanguageFilePrefix . 'accordion.title',
            'accordion',
            'EXT:theme_core/Resources/Public/Icons/ContentElements/accordion.gif'
        ],
        'login',
        'after'
    );

    // "contentElementSlider"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $contentElementLanguageFilePrefix . 'slider.title',
            'contentElementSlider',
            'EXT:theme_core/Resources/Public/Icons/ContentElements/slider.gif'
        ],
        'accordion',
        'after'
    );

    // "bigIconTextButton"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $contentElementLanguageFilePrefix . 'bigIconTextButton.title',
            'bigIconTextButton',
            'EXT:theme_core/Resources/Public/Icons/ContentElements/bigIconTextButton.gif'
        ],
        'contentElementSlider',
        'after'
    );

    // "iconTextButton"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $contentElementLanguageFilePrefix . 'iconTextButton.title',
            'iconTextButton',
            'EXT:theme_core/Resources/Public/Icons/ContentElements/iconTextButton.gif'
        ],
        'bigIconTextButton',
        'after'
    );

    // The "divider" these content elements
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $contentElementLanguageFilePrefix . 'tab.contentElements',
            '--div--',
            NULL
        ],
        'login',
        'after'
    );

    //
    // Palettes
    //
    // "imageSize"
    $GLOBALS['TCA']['tt_content']['palettes']['imageSize'] = [
        'showitem' => '
            imagewidth;' . $contentElementLanguageFilePrefix . 'tt_content.palette.imageSize.imageWidth,
            imageheight;' . $contentElementLanguageFilePrefix . 'tt_content.palette.imageSize.imageHeight,
        '
    ];

    //
    // Types
    //
    // "contentElementSlider"
    $GLOBALS['TCA']['tt_content']['types']['contentElementSlider'] = [
        'showitem' => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                header;' . $frontendLanguageFilePrefix . 'header.ALT.div_formlabel,
            --div--;' . $contentElementLanguageFilePrefix . 'slider.tabs.slides,image,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                layout;' . $frontendLanguageFilePrefix . 'layout_formlabel,
                --palette--;' . $contentElementLanguageFilePrefix . 'tt_content.palette.imageSize;imageSize,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
        '
    ];

    // "bigIconTextButton"
    $GLOBALS['TCA']['tt_content']['types']['bigIconTextButton'] = [
        'showitem' => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                header;' . $cmsLanguageFilePrefix . 'header_formlabel,
                --linebreak--,bodytext;' . $contentElementLanguageFilePrefix . 'bigIconTextButton.bodytext,
                --linebreak--,subheader;' . $contentElementLanguageFilePrefix . 'bigIconTextButton.buttonText,
                --linebreak--,header_link;' . $cmsLanguageFilePrefix . 'header_link_formlabel,
                --linebreak--,pi_flexform;' . $contentElementLanguageFilePrefix . 'slider.tabs.settings,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                layout;' . $frontendLanguageFilePrefix . 'layout_formlabel,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
        '
    ];

    // "contentElementSlider"
    $GLOBALS['TCA']['tt_content']['types']['iconTextButton'] = [
        'showitem' => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                header;' . $cmsLanguageFilePrefix . 'header_formlabel,
                --linebreak--,bodytext;' . $contentElementLanguageFilePrefix . 'iconTextButton.bodytext,
                --linebreak--,subheader;' . $contentElementLanguageFilePrefix . 'iconTextButton.buttonText,
                --linebreak--,header_link;' . $cmsLanguageFilePrefix . 'header_link_formlabel,
                --linebreak--,pi_flexform;' . $contentElementLanguageFilePrefix . 'slider.tabs.settings,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                layout;' . $frontendLanguageFilePrefix . 'layout_formlabel,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
        '
    ];

    // "accordion"
    $GLOBALS['TCA']['tt_content']['types']['accordion'] = [
        'showitem' => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.headers;headers,
                records;' . $contentElementLanguageFilePrefix . 'accordion.records_formlabe,
                rowDescription,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                layout;' . $frontendLanguageFilePrefix . 'layout_formlabel,
                --linebreak--,pi_flexform;' . $contentElementLanguageFilePrefix . 'tt_content.tabs.settings,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
        '
    ];

    //
    // Flexforms
    //
    // "contentElementSlider"
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,bigIconTextButton'] = 'FILE:EXT:theme_core/Configuration/FlexForms/flexform_bigIconTextButton.xml';

    // "iconTextButton"
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,iconTextButton'] = 'FILE:EXT:theme_core/Configuration/FlexForms/flexform_iconTextButton.xml';

    // "accordion"
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,accordion'] = 'FILE:EXT:theme_core/Configuration/FlexForms/flexform_accordion.xml';

});

