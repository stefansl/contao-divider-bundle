<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


namespace StefanSl\DividerBundle;

/**
 * Class WidgetDivider
 *
 * Widget "divider".
 *
 * @copyright  CLICKPRESS Internetagentur 2005-2016
 * @author     Stefan Schulz-Lauterbach <http://clickpress.de>
 * @package    divider
 */
class WidgetDivider extends \Widget
{


    /**
     * Template
     *
     * @var string
     */
    protected $strTemplate = 'form_divider';


    /**
     * Generate the widget and return it as string
     *
     * @return string
     */
    public function generate()
    {
        return;
    }
}
