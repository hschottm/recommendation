<?php

/**
 * Contao Open Source CMS - Recommendation extension
 *
 * Copyright (c) 2009-2016 Helmut Schottmüller
 *
 * @license LGPL-3.0+
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
