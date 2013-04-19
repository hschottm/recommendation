<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/recommendation>
 * @package    recommendation
 * @license    LGPL
 */

namespace Contao;

/**
 * Class ContentRecommendation
 *
 * Front end content element "recommendation".
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/recommendation>
 * @package    Controller
 */
class ContentRecommendation extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_recommendation';

	/**
	 * Generate content element
	 */
	protected function compile()
	{
		$this->import('String');
		$this->loadLanguageFile('tl_content');

		$mailstring = rawurlencode($GLOBALS['TL_LANG']['tl_content']['recommendation_enter_recipient']);
		$mailstring .= "?subject=" . rawurlencode($this->recommendation_subject);

		$arrArticle = $this->Database->prepare("SELECT tl_article.pid FROM tl_article WHERE id=?")
			->limit(1)
			->execute($this->pid)
			->fetchEach('pid');
		if (count($arrArticle) == 1) $pageid = $arrArticle[0];
		if ($pageid > 0)
		{
			$objPage = $this->Database->prepare("SELECT * FROM tl_page WHERE id=?")
				->limit(1)
				->execute($pageid);
			$pageArr = ($objPage->numRows) ? $objPage->fetchAssoc() : array();
			$pageref = '<' . ampersand(specialchars(\Environment::get('url') . \Environment::get('path')));
			if (!preg_match("/.*\\/^/", $pageref)) $pageref .= '/';
			$pageref .= ampersand(specialchars($this->generateFrontendUrl($pageArr))) . '>';
		}
		else
		{
			$pageref = '<' . ampersand(specialchars(\Environment::get('url') . \Environment('scriptName'))) . '>';
		}
		$mailstring .= "&amp;body=" . rawurlencode(sprintf($this->recommendation_body, $pageref));
		$url = 'mailto:' . $mailstring;


		$this->Template->href = $url;
		$this->Template->link = specialchars($this->recommendation_linktext);
		$this->Template->title = specialchars($this->recommendation_linktext);
	}
}

?>