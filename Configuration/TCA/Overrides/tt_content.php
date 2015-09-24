<?php

// Spacer Before Content Elements
//
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
  'LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:tab.contentElements',
  '--div--'
);

// Content Element Slider
//
$GLOBALS['TCA']['tt_content']['palettes']['contentElementSlider'] = array(
  'showitem' => 'header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
         --linebreak--, subheader;LLL:EXT:cms/locallang_ttc.xlf:subheader_formlabel,
         --linebreak--, header_link;LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
  'canNotCollapse' => 1
);

$GLOBALS['TCA']['tt_content']['types']['contentElementSlider'] = array(
    'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
               header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
               --div--;LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:slider.tabs.settings,pi_flexform,
               --div--;LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:slider.tabs.slides,image,
               --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
               --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
               --linebreak--,imagewidth;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth_formlabel, imageheight;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight_formlabel,
               --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
               --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
               --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
               --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended'
);

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
  'LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:slider.title',
  'contentElementSlider',
  'EXT:theme_core/Resources/Public/Icons/ContentElements/slider.gif'
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,contentElementSlider'] = 'FILE:EXT:theme_core/Configuration/FlexForms/flexform_slider.xml';

// Content Element bigIconTextButton
//
$GLOBALS['TCA']['tt_content']['palettes']['bigIconTextButton'] = array(
  'showitem' => 'header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
         --linebreak--,bodytext;LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:bigIconTextButton.bodytext,
         --linebreak--,subheader;LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:bigIconTextButton.buttonText,
         --linebreak--,header_link;LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel,
         --linebreak--,pi_flexform;LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:slider.tabs.settings',

  'canNotCollapse' => 1
);

$GLOBALS['TCA']['tt_content']['types']['bigIconTextButton'] = array(
    'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;bigIconTextButton,'
);

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
  'LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:bigIconTextButton.title',
  'bigIconTextButton',
  'EXT:theme_core/Resources/Public/Icons/ContentElements/bigIconTextButton.gif'
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,bigIconTextButton'] = 'FILE:EXT:theme_core/Configuration/FlexForms/flexform_bigIconTextButton.xml';

// Content Element Accordion
//
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
  'LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:accordion.title',
  'accordion',
  'EXT:theme_core/Resources/Public/Icons/ContentElements/accordion.gif'
);

$GLOBALS['TCA']['tt_content']['types']['accordion'] = array(
    'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,rowDescription,records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,
                    --div--;LLL:EXT:theme_core/Resources/Private/Language/ContentElements.xlf:slider.tabs.settings,pi_flexform,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
                    --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories'
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,accordion'] = 'FILE:EXT:theme_core/Configuration/FlexForms/flexform_accordion.xml';

?>
