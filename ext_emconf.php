<?php

########################################################################
# Extension Manager/Repository config file for ext: "fl_realurl_image"
#
# Auto generated 30-10-2013 13:48
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Image RealURL',
	'description' => 'Add the RealURL functionality to image files. "typo3temp/2d972d5c89b5.jpg" goes "nice-name.jpg"!',
	'category' => 'fe',
	'shy' => 0,
	'version' => '3.0.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Tim Lochmueller, Sareen Millet, Dr. Ronald P. Steiner',
	'author_email' => 'webmaster@fruit-lab.de, Ronald.Steiner [at] googlemail.com',
	'author_company' => 'typo3.fruit-lab.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-7.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:17:{s:16:"ext_autoload.php";s:4:"8a28";s:21:"ext_conf_template.txt";s:4:"a412";s:12:"ext_icon.gif";s:4:"c96d";s:17:"ext_localconf.php";s:4:"dcd5";s:14:"ext_tables.php";s:4:"c1d5";s:14:"ext_tables.sql";s:4:"15cf";s:31:"Classes/class.hook_tslib_fe.php";s:4:"8a1f";s:35:"Classes/class.tx_flrealurlimage.php";s:4:"848e";s:31:"Classes/class.ux_tslib_cObj.php";s:4:"9952";s:32:"Classes/XClass/ImageResource.php";s:4:"0370";s:29:"Classes/Service/CleanTask.php";s:4:"5c47";s:35:"Classes/Service/FileInformation.php";s:4:"4416";s:38:"Configuration/TypoScript/constants.txt";s:4:"353e";s:34:"Configuration/TypoScript/setup.txt";s:4:"0aa7";s:27:"Configuration/TCA/Cache.php";s:4:"b0ce";s:14:"doc/manual.sxw";s:4:"a9fa";s:40:"Resources/Private/Language/locallang.xml";s:4:"0443";}',
);

?>