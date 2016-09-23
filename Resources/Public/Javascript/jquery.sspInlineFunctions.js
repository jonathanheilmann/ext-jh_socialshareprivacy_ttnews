/*! jQuery jh_socialshareprivacy_ttnews inlineFunctions - v0.0.1 - 2015-01-24
*
* Copyright (c) 2015 Jonathan Heilmann;
*
* SOURCE
* http://stackoverflow.com/questions/10352057/how-to-define-variables-when-jquery-is-inserted-in-the-footer
*
* CHANGELOG
* 0.0.1:	-initial release
*
*/
;(function($) {
	if (typeof sspInlineFunctions != 'undefined') {
		$.each(sspInlineFunctions, function(idx, func){
			func($);
		});
	}
})(window.jQuery || window.Zepto);