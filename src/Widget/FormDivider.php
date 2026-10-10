<?php

declare(strict_types=1);

/*
 * This file is part of Contao Divider Bundle.
 *
 * (c) Stefan Schulz-Lauterbach <https://clickpress.de>
 * @license LGPL-3.0-or-later
 * @link https://github.com/stefansl/contao-divider-bundle
 */

namespace StefanSl\DividerBundle\Widget;

use Contao\Widget;

/**
 * Form field that renders a horizontal rule. It has no input, so there is nothing
 * to validate or submit.
 */
class FormDivider extends Widget
{
    protected $strTemplate = 'form_divider';

    protected $strPrefix = 'widget widget-divider';

    public function validate(): void
    {
    }

    public function generate(): string
    {
        return '<hr>';
    }
}
