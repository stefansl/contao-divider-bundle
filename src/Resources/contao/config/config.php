<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2017 Leo Feyer
 *
 * PHP version 5
 * @copyright  CLICKPRESS Internetagentur
 * @author     Stefan Schulz-Lauterbach
 * @package    divider
 * @license    LGPL
 * @filesource
 */


 
 array_insert($GLOBALS['TL_CTE']['texts'], 10, array
 (
 	'divider' => 'StefanSl\DividerBundle\ContentDivider')
 );


$GLOBALS['TL_FFL']['divider'] = 'StefanSl\DividerBundle\WidgetDivider';
$GLOBALS['BE_FFL']['divider'] = 'StefanSl\DividerBundle\WidgetDivider';

?>