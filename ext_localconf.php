<?php
if (!defined ('TYPO3_MODE'))
     die ('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_news']['extraItemMarkerHook'][] = 'EXT:jh_socialshareprivacy_ttnews/Classes/Hooks/TxTtNews.php:\Heilmann\JhSocialshareprivacyTtnews\Hooks\TxTtNews';