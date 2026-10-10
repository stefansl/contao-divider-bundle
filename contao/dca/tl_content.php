<?php

declare(strict_types=1);

/*
 * This file is part of Contao Divider Bundle.
 *
 * (c) Stefan Schulz-Lauterbach <https://clickpress.de>
 * @license LGPL-3.0-or-later
 * @link https://github.com/stefansl/contao-divider-bundle
 */

use StefanSl\DividerBundle\Controller\ContentElement\DividerController;

$GLOBALS['TL_DCA']['tl_content']['palettes'][DividerController::TYPE] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop';
