<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:cleverreach/Configuration/TypoScript/TsConfig/Page/powermail.tsconfig">'
);
