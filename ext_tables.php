<?php

// Custom CSS include
if (TYPO3_MODE=="BE")   {
    $TBE_STYLES['inDocStyles_TBEstyle'] .= '@import "/typo3conf/ext/theme_core/Resources/Public/Css/Backend/be.css";';
}

