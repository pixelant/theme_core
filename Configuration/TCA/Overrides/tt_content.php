<?php

$GLOBALS['TCA']['tt_content']['palettes']['contentElementSlider'] = array(
  'showitem' => 'header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
         --linebreak--, subheader;LLL:EXT:cms/locallang_ttc.xlf:subheader_formlabel,
         --linebreak--, header_link;LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
  'canNotCollapse' => 1
);

$GLOBALS['TCA']['tt_content']['types']['contentElementSlider'] = array(
    'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
               header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
               --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,
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

?>
