<?php
namespace StefanSl\DividerBundle;

use Contao\ContentElement;

class ContentDivider extends ContentElement
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
