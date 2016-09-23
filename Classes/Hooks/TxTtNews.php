<?php

namespace Heilmann\JhSocialshareprivacyTtnews\Hooks;

/***************************************************************
*  Copyright notice
*
*  (c) 2013-2016 Jonathan Heilmann <mail@jonathan-heilmann.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Class TxTtNews
 * @package Heilmann\JhSocialshareprivacyTtnews\Hooks
 */
class TxTtNews extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin {
	var $prefixId      = 'TxTtNews';        // Same as class name
	var $extKey        = 'jh_socialshareprivacy_ttnews';    // The extension key.
	var $scriptRelPath = 'Classes/Hooks/TxTtNews.php';
	var $pi_checkCHash = true;

	/**
	 * The extraItemMarkerProcessor function from tt_news
	 *
	 * @return array    socialshareprivacy bar
	 */
	public function extraItemMarkerProcessor($markerArray, $row, $conf, &$pObj) {
		$this->conf = $pObj->conf['tx_jhsocialshareprivacyttnews_pi1.']; //required to load LocalLang
		$this->pi_loadLL();

		// get configuration of plugin
		$config = $this->conf;

		// get JavaScript Template
		if(isset($config['template'])) {
			$this->tmpl = $pObj->cObj->fileResource($config['template']);
		} else {
			$this->tmpl = $pObj->cObj->fileResource(ExtensionManagementUtility::siteRelPath($this->extKey).'Resources/Private/Templates/template.js');
		}

		// include CSS if set
		if($config['css_path'] != '') {
			$GLOBALS['TSFE']->pSetup['includeCSS.'][$this->extKey] = $config['css_path'];
		}

		//include JavaScript files
		if($config['use_jquery_from_extension'] == 1) {
			$GLOBALS['TSFE']->pSetup['includeJSFooterlibs.'][$this->extKey.'_1'] = $config['jquery_path'];
		}
		if($config['socialshareprivacy_path'] != '') {
			$GLOBALS['TSFE']->pSetup['includeJSFooterlibs.'][$this->extKey.'_2'] = $config['socialshareprivacy_path'];
		}
		$GLOBALS['TSFE']->pSetup['includeJSFooterlibs.'][$this->extKey.'_3'] = $config['sspInlineFunctions_path'];

		// create link to single-view of tt_news article
		$linkconf = array(
			'parameter' => (!empty($pObj->config['singlePid'])) ? $pObj->config['singlePid'] : $GLOBALS['TSFE']->id,
			'additionalParams' => '&tx_ttnews[tt_news]='.$row['uid'],
			'useCacheHash' => true,
			'forceAbsoluteUrl' => true,
			'returnLast' => 'url',
		);
		$link = $pObj->cObj->typoLink('', $linkconf);

		$markerArray['###SOCIALPRIVACYSHARE###'] = $this->getBar($config, $link, $row['uid'], $pObj);

		return $markerArray;
	}


	private function getBar($config, $link, $newsUid, $pObj) {
		$marker['###NEWSUID###'] = $newsUid;

		// default Settings
		$marker['###INFO_LINK###']=$this->getSetting('info_link','http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html', $pObj);
		$marker['###TXT_HELP###']=$this->pi_getLL('txt_help','',FALSE);
		$marker['###SETTINGS_PERMA###']=$this->pi_getLL('settings_perma','',FALSE);
		$marker['###COOKIE_EXPIRES###']=$this->getSetting('cookie_expires','356', $pObj);
		$marker['###CSS_PATH###']='';
		$marker['###URI###'] = $link;

		$img_path = ExtensionManagementUtility::siteRelPath($this->extKey).'socialshareprivacy/socialshareprivacy/images/';

		$marker['###FB_STATUS###']=$this->getSettingFB('status','on', $pObj);
		$marker['###FB_DUMMY_IMG###']=$GLOBALS['TSFE']->tmpl->getFileName($this->getSettingFB('dummy_img',$img_path.'dummy_facebook.png', $pObj));
		$marker['###TXT_FB_OFF###']=$this->pi_getLL('txt_fb_off','',FALSE);
		$marker['###TXT_FB_ON###']=$this->pi_getLL('txt_fb_on','',FALSE);
		$marker['###FB_PERMA_OPTION###']=$this->getSettingFB('perma_option','on', $pObj);
		$marker['###FB_DISPLAY_NAME###']=$this->getSettingFB('display_name','Facebook', $pObj);
		$marker['###FB_REFERRER_TRACK###']=$this->getSettingFB('referrer_track','', $pObj);
		$marker['###FB_ACTION###']=$this->getSettingFB('action','recommend', $pObj);
		$marker['###FB_LANGUAGE###']=$this->getSettingFB('language','de_DE', $pObj);
		$marker['###FB_TXT_INFO###']=$this->pi_getLL('fb_txt_info','',FALSE);

		// Twitter settings
		$marker['###TW_STATUS###']=$this->getSettingTW('status','on', $pObj);
		$marker['###TW_DUMMY_IMG###']=$GLOBALS['TSFE']->tmpl->getFileName($this->getSettingTW('dummy_img',$img_path.'dummy_twitter.png', $pObj));
		$marker['###TXT_TWITTER_OFF###']=$this->pi_getLL('txt_twitter_off','',FALSE);;
		$marker['###TXT_TWITTER_ON###']=$this->pi_getLL('txt_twitter_on','',FALSE);;
		$marker['###TW_PERMA_OPTION###']=$this->getSettingTW('perma_option','on', $pObj);
		$marker['###TW_DISPLAY_NAME###']=$this->getSettingTW('display_name','Twitter', $pObj);
		$marker['###TW_REFERRER_TRACK###']=$this->getSettingTW('referrer_track','', $pObj);
		$marker['###TW_LANGUAGE###']=$this->getSettingTW('language','en', $pObj);
		$marker['###TW_TXT_INFO###']=$this->pi_getLL('twitter_txt_info','',FALSE);

		// Google settings
		$marker['###GP_STATUS###']=$this->getSettingGP('status','on', $pObj);
		$marker['###GP_DUMMY_IMG###']=$GLOBALS['TSFE']->tmpl->getFileName($this->getSettingGP('dummy_img',$img_path.'dummy_gplus.png', $pObj));
		$marker['###TXT_GPLUS_OFF###']=$this->pi_getLL('txt_gplus_off','',FALSE);;
		$marker['###TXT_GPLUS_ON###']=$this->pi_getLL('txt_gplus_on','',FALSE);;
		$marker['###GP_PERMA_OPTION###']=$this->getSettingGP('perma_option','on', $pObj);
		$marker['###GP_DISPLAY_NAME###']=$this->getSettingGP('display_name','Google+', $pObj);
		$marker['###GP_REFERRER_TRACK###']=$this->getSettingGP('referrer_track','', $pObj);
		$marker['###GP_LANGUAGE###']=$this->getSettingGP('language','de', $pObj);
		$marker['###GP_TXT_INFO###']=$this->pi_getLL('gplus_txt_info','',FALSE);

		// js in template and output in frontend
		$js_conf=str_replace(array_keys($marker),$marker,$this->tmpl);
		$wrapedJs = '<script type="text/javascript">
	/*<![CDATA[*/
<!--
if (typeof sspInlineFunctions == \'undefined\'){
	window.sspInlineFunctions = new Array();
}
sspInlineFunctions.push(function($) {
'.$js_conf.'
});
// -->
	/*]]>*/
</script>';
		// output of plugin
		$content = $wrapedJs . '<div id="socialshareprivacy_'.$newsUid.'"></div>';
		return $this->pi_wrapInBaseClass($content);
	}


	/**
	 * returns given typoscript-value or default if typoscript empty: default settings
	 *
	 * @param  string       $setting
	 * @param  string       $default value
     * @param  array        $pObj
     * @return string
	 **/
	private function getSetting($setting, $default, $pObj) {
		$lConf = $pObj->conf['tx_jhsocialshareprivacyttnews_pi1.'];
		if ( isset($lConf[$setting]) && $lConf[$setting] == true) {
			return $lConf[$setting];
		} else {
			return $default;
		}
	}

	/**
	 * returns given typoscript-value or default if typoscript empty: facebook settings
	 *
	 * @param  string       $setting
	 * @param  string       $default value
     * @param  array        $pObj
     * @return string
	 **/
	private function getSettingFB($setting, $default, $pObj) {
		$lConf = $pObj->conf['tx_jhsocialshareprivacyttnews_pi1.']['services.']['facebook.'];
		if ( isset($lConf[$setting]) && $lConf[$setting] == true) {
			return $lConf[$setting];
		} else {
			return $default;
		}
	}

	/**
	 * returns given typoscript-value or default if typoscript empty: twitter settings
	 *
	 * @param  string       $setting
	 * @param  string       $default value
     * @param  array        $pObj
     * @return string
	 **/
	private function getSettingTW($setting, $default, $pObj) {
		$lConf = $pObj->conf['tx_jhsocialshareprivacyttnews_pi1.']['services.']['twitter.'];
		if ( isset($lConf[$setting]) && $lConf[$setting] == true) {
			return $lConf[$setting];
		} else {
			return $default;
		}
	}

	/**
	 * returns given typoscript-value or default if typoscript empty: Google+-Settings
	 *
	 * @param  string       $setting
	 * @param  string       $default value
	 * @param  array        $pObj
     * @return string
	 **/
	private function getSettingGP($setting, $default, $pObj) {
		$lConf = $pObj->conf['tx_jhsocialshareprivacyttnews_pi1.']['services.']['gplus.'];
		if ( isset($lConf[$setting]) && $lConf[$setting] == true) {
			return $lConf[$setting];
		} else {
			return $default;
		}
	}

}