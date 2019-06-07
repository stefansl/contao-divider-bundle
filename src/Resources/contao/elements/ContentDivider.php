<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * PHP version 5
 * @copyright  CLICKPRESS Internetagentur
 * @author     Stefan Schulz-Lauterbach
 * @package    divider
 * @license    LGPL
 * @filesource
 */

namespace StefanSl\DividerBundle;

/**
 * Class ContentDivider
 *
 * Front end content element "divider".
 * @copyright  CLICKPRESS Internetagentur 2005-2013
 * @author     Stefan Schulz-Lauterbach <http://clickpress.de>
 * @package    divider
 */
class ContentDivider extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_divider';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		return;
	}
}
