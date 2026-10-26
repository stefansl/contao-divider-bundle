<?php

declare(strict_types=1);

/*
 * This file is part of Contao Divider Bundle.
 *
 * (c) Stefan Schulz-Lauterbach <https://clickpress.de>
 * @license LGPL-3.0-or-later
 * @link https://github.com/stefansl/contao-divider-bundle
 */

namespace StefanSl\DividerBundle\Tests\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\DelegatingParser;
use PHPUnit\Framework\TestCase;
use StefanSl\DividerBundle\ContaoManager\Plugin;
use StefanSl\DividerBundle\StefanSlDividerBundle;

class PluginTest extends TestCase
{
    public function testReturnsTheBundle(): void
    {
        $bundles = (new Plugin())->getBundles(new DelegatingParser());

        $this->assertCount(1, $bundles);
        $this->assertInstanceOf(BundleConfig::class, $bundles[0]);
        $this->assertSame(StefanSlDividerBundle::class, $bundles[0]->getName());
        $this->assertSame([ContaoCoreBundle::class], $bundles[0]->getLoadAfter());
        $this->assertSame(['divider'], $bundles[0]->getReplace());
    }
}
