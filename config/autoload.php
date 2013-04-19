<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Recommendation
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentRecommendation' => 'system/modules/recommendation/elements/ContentRecommendation.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_recommendation' => 'system/modules/recommendation/templates',
));
