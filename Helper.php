<?php

/**
 * News4ward
 * a contentelement driven news/blog-system
 *
 * @author Christoph Wiechert <wio@psitrax.de>
 * @copyright 4ward.media GbR <http://www.4wardmedia.de>
 * @package news4ward_categories
 * @filesource
 * @licence LGPL
 */


namespace Psi\News4ward\TitleSearch;

class Helper extends \Controller
{

	protected static $arrJumpTo = array();

	/**
	 * Return the WHERE-condition if a the url has an cat-parameter
	 * @return bool|string
	 */
	public function titleSearchFilter()
	{
		if(!$this->Input->get('titleSearch')) return false;

		$s = urldecode($this->Input->get('titleSearch'));

		return array
		(
			'where'  => 'tl_news4ward_article.title LIKE ?',
			'values' => array("%$s%")
		);
	}

}
