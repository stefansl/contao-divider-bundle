<?php

declare(strict_types=1);

/*
 * This file is part of Contao Divider Bundle.
 *
 * (c) Stefan Schulz-Lauterbach <https://clickpress.de>
 * @license LGPL-3.0-or-later
 * @link https://github.com/stefansl/contao-divider-bundle
 */

namespace StefanSl\DividerBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use StefanSl\DividerBundle\Controller\ContentElement\DividerController;
use StefanSl\DividerBundle\StefanSlDividerBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class StefanSlDividerBundleTest extends TestCase
{
    public function testRegistersTheContentElementController(): void
    {
        $container = new ContainerBuilder();
        $container->setParameter('kernel.environment', 'test');
        $container->setParameter('kernel.build_dir', sys_get_temp_dir());

        $bundle = new StefanSlDividerBundle();
        $bundle->getContainerExtension()->load([], $container);

        $this->assertTrue($container->hasDefinition(DividerController::class));
        $this->assertSame(\dirname(__DIR__, 2), $bundle->getPath());
    }
}
