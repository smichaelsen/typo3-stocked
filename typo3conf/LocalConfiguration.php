<?php
return array(
	'BE' => array(
		'debug' => FALSE,
		'explicitADmode' => 'explicitAllow',
		'installToolPassword' => '$P$C2tD5IGsRRbuiDj7UR/g3A4myIt0BI0',
		'loginSecurityLevel' => 'normal',
		'maxFileSize' => '512000',
		'versionNumberInFilename' => '0',
	),
	'DB' => array(
		'database' => 'doellken',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'password' => '123',
		'socket' => '',
		'username' => 'doellken',
	),
	'EXT' => array(
		'extConf' => array(
			'backend' => 'a:0:{}',
			'coreapi' => 'a:0:{}',
			'cshmanual' => 'a:0:{}',
			'direct_mail' => 'a:9:{s:12:"sendPerCycle";s:2:"50";s:13:"cron_language";s:2:"en";s:14:"addRecipFields";s:0:"";s:10:"adminEmail";s:17:"admin@website.com";s:7:"cronInt";s:1:"5";s:15:"notificationJob";s:1:"1";s:19:"enablePlainTextNews";s:1:"1";s:14:"UseHttpToFetch";s:1:"0";s:13:"updateMessage";s:1:"0";}',
			'felogin' => 'a:0:{}',
			'fluidcontent' => 'a:0:{}',
			'fluidcontent_core' => 'a:0:{}',
			'fluidpages' => 'a:2:{s:8:"autoload";s:1:"1";s:8:"doktypes";s:0:"";}',
			'flux' => 'a:3:{s:9:"debugMode";s:1:"0";s:7:"compact";s:1:"0";s:12:"handleErrors";s:1:"0";}',
			'form' => 'a:0:{}',
			'formhandler' => 'a:0:{}',
			'formhandler_fluid' => 'a:0:{}',
			'indexed_search' => 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
			'indexed_search_mysql' => 'a:0:{}',
			'lfeditor' => 'a:4:{s:13:"viewLanguages";s:8:"de,cs,fr";s:15:"defaultLanguage";s:0:"";s:9:"extIgnore";s:108:"/^(CVS|.svn|.git|csh_)|fluidcontent|fluidpages|formhandler|flux|lfeditor|listmod|realurl|tt_address|tt_news/";s:13:"changeXlfDate";s:1:"1";}',
			'listmod' => 'a:0:{}',
			'lowlevel' => 'a:0:{}',
			'mediace' => 'a:0:{}',
			'migrator' => 'a:2:{s:13:"sqlFolderPath";s:4:"_sql";s:15:"mysqlBinaryPath";s:14:"/usr/bin/mysql";}',
			'realurl' => 'a:4:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'recycler' => 'a:0:{}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'rtehtmlarea' => 'a:8:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"0";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"forceCommandMode";s:1:"0";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
			'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
			'schemaker' => 'a:1:{s:8:"frontend";s:1:"0";}',
			'setup' => 'a:0:{}',
			'stocked' => 'a:0:{}',
			'theme_foundation_apps' => 'a:0:{}',
			'tstemplate' => 'a:0:{}',
			'vhs' => 'a:0:{}',
			'wizard_crpages' => 'a:0:{}',
		),
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(
				'de',
			),
		),
	),
	'FE' => array(
		'contentRenderingTemplates' => array(
			'fluidcontentcore/Configuration/TypoScript/',
		),
		'debug' => FALSE,
		'hidePagesIfNotTranslatedByDefault' => '1',
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'colorspace' => 'sRGB',
		'im' => 1,
		'im_mask_temp_ext_gif' => 1,
		'im_path' => '/usr/bin/',
		'im_path_lzw' => '/usr/bin/',
		'im_v5effects' => 1,
		'im_version_5' => 'im6',
		'image_processing' => 1,
		'jpg_quality' => '80',
	),
	'INSTALL' => array(
		'wizardDone' => array(
			'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
		),
	),
	'SYS' => array(
		'caching' => array(
			'cacheConfigurations' => array(
				'extbase_object' => array(
					'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
					'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
					'groups' => array(
						'system',
					),
					'options' => array(
						'defaultLifetime' => 0,
					),
				),
			),
		),
		'clearCacheSystem' => FALSE,
		'devIPmask' => '',
		'displayErrors' => 0,
		'enableDeprecationLog' => FALSE,
		'encryptionKey' => '14f6366f70ce6b768f50fac48471bbb7c595a4ffd406b9cd32b7cc9c9ffd4fba0cdcef26f119fcc716f3d710925491c8',
		'isInitialInstallationInProgress' => FALSE,
		'sitename' => '[DEV] stocked.io',
		'sqlDebug' => 0,
		'systemLogLevel' => 2,
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>