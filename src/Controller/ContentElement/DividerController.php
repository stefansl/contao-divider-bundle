<?php

declare(strict_types=1);

/*
 * This file is part of Contao Divider Bundle.
 *
 * (c) Stefan Schulz-Lauterbach <https://clickpress.de>
 * @license LGPL-3.0-or-later
 * @link https://github.com/stefansl/contao-divider-bundle
 */

namespace StefanSl\DividerBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(self::TYPE, category: 'texts')]
class DividerController extends AbstractContentElementController
{
    public const TYPE = 'divider';

    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        return $template->getResponse();
    }
}
