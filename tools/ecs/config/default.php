<?php

declare(strict_types=1);

use Contao\EasyCodingStandard\Set\SetList;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;

return ECSConfig::configure()
    ->withSets([SetList::CONTAO])
    ->withPaths([
        __DIR__.'/../../../src',
        __DIR__.'/../../../tests',
    ])
    ->withSkip([
        MethodChainingIndentationFixer::class => [
            '*/DependencyInjection/Configuration.php',
        ],
    ])
    ->withParallel()
    ->withSpacing(Option::INDENTATION_SPACES, "\n")
    ->withConfiguredRule(HeaderCommentFixer::class, [
        'header' => "This file is part of Contao Divider Bundle.\n\n(c) Stefan Schulz-Lauterbach <https://clickpress.de>\n@license LGPL-3.0-or-later\n@link https://github.com/stefansl/contao-divider-bundle",
    ])
    ->withCache(sys_get_temp_dir().'/ecs/stefansl/contao-divider-bundle')
;
