<?php
/**
 * @copyright  Stefan Schulz-Lauterbach 2017 <https://clickpress.de>
 * @author     Stefan Schulz-Lauterbach
 * @package    Divider
 * @license    LGPL-3.0+
 * @see	       https://github.com/stefansl/contao-divider-bundle
 *
 */

namespace StefanSl\DividerBundle\ContaoManager;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Stefan Schulz-Lauterbach
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('StefanSl\DividerBundle\StefanSlDividerBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
                ->setReplace(['divider']),
        ];
    }
}