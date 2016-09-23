<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "jh_socialshareprivacy_ttnews".
 *
 * Auto generated 24-01-2015 08:45
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'socialshareprivacy for tt_news',
	'description' => 'Adds the heise.de socialshareprivacy plugin to each tt_news item. Marker: ###SOCIALPRIVACYSHARE###',
	'category' => 'plugin',
	'version' => '1.1.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Jonathan Heilmann',
	'author_email' => 'mail@jonathan-heilmann.de',
	'author_company' => '',
	'constraints' =>
	array (
		'depends' =>
		array (
			'typo3' => '6.2.0-7.6.99',
			'tt_news' => '3.6.0-',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
);

