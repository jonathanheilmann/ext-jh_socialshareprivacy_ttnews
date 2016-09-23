(function($){
	if($("#socialshareprivacy_###NEWSUID###").length >= 0){
		$("#socialshareprivacy_###NEWSUID###").socialSharePrivacy({
			services : {
				facebook : {
					'status'	  : '###FB_STATUS###',
					'dummy_img'	  : '###FB_DUMMY_IMG###',
					'txt_fb_off'  : '###TXT_FB_OFF###',
					'txt_fb_on'   : '###TXT_FB_ON###',
					'perma_option': '###FB_PERMA_OPTION###',
					'display_name': '###FB_DISPLAY_NAME###',
					'referrer_track':'###FB_REFERRER_TRACK###',
					'action'	  : '###FB_ACTION###',
					'txt_info'	  : '###FB_TXT_INFO###',
					'language'	  : '###FB_LANGUAGE###'
				},
				twitter : {
					'status'	  : '###TW_STATUS###',
					'dummy_img'	  : '###TW_DUMMY_IMG###',
					'txt_twitter_off'  : '###TXT_TWITTER_OFF###',
					'txt_twitter_on'   : '###TXT_TWITTER_ON###',
					'perma_option': '###TW_PERMA_OPTION###',
					'display_name': '###TW_DISPLAY_NAME###',
					'referrer_track':'###TW_REFERRER_TRACK###',
					'txt_info'	  : '###TW_TXT_INFO###',
					'language'	  : '###TW_LANGUAGE###'
				},
				gplus : {
					'status'	  : '###GP_STATUS###',
					'dummy_img'	  : '###GP_DUMMY_IMG###',
					'txt_gplus_off'  : '###TXT_GPLUS_OFF###',
					'txt_gplus_on'   : '###TXT_GPLUS_ON###',
					'perma_option': '###GP_PERMA_OPTION###',
					'display_name': '###GP_DISPLAY_NAME###',
					'referrer_track':'###GP_REFERRER_TRACK###',
					'txt_info'	  : '###GP_TXT_INFO###',
					'language'	  : '###GP_LANGUAGE###'
				}
			},
		'info_link'         : '###INFO_LINK###',
		'txt_help'          : '###TXT_HELP###',
		'settings_perma'    : '###SETTINGS_PERMA###',
		'cookie_expires'    : '###COOKIE_EXPIRES###',
		'css_path'          : '###CSS_PATH###',
		'uri'				: '###URI###'
		});
	}
})(window.jQuery || window.Zepto);