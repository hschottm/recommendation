<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/recommendation>
 * @package    recommendation
 * @license    LGPL
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['recommendation'] = '{type_legend},type,headline;{recommendation_legend},recommendation_linktext,recommendation_subject,recommendation_body;{protected_legend:hide},protected;{expert_legend},{expert_legend:hide},guests,cssID,space';


$GLOBALS['TL_DCA']['tl_content']['fields']['recommendation_linktext'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['recommendation_linktext'],
	'default'                 => &$GLOBALS['TL_LANG']['tl_content']['recommendation_linktext_text'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'allowHtml' => false, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['recommendation_subject'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['recommendation_subject'],
	'default'                 => &$GLOBALS['TL_LANG']['tl_content']['recommendation_subject_text'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'allowHtml' => false, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['recommendation_body'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['recommendation_body'],
	'default'                 => &$GLOBALS['TL_LANG']['tl_content']['recommendation_body_text'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>true, 'allowHtml' => false, 'rows' => 10, 'cols' => 80, 'tl_class'=>'long'),
	'sql'                     => "text NULL"
);

/**
 * Class tl_content_recommendation
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/recommendation>
 * @package    Controller
 */
class tl_content_recommendation extends Backend
{
}

?>