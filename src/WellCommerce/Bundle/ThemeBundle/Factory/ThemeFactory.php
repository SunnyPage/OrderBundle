<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ThemeBundle\Factory;

use WellCommerce\Bundle\CoreBundle\Factory\AbstractFactory;
use WellCommerce\Bundle\CoreBundle\Factory\FactoryInterface;
use WellCommerce\Bundle\ThemeBundle\Entity\Theme;

/**
 * Class ThemeFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ThemeFactory extends AbstractFactory implements FactoryInterface
{
    /**
     * @return \WellCommerce\Bundle\ThemeBundle\Entity\ThemeInterface
     */
    public function create()
    {
        $theme = new Theme();

        return $theme;
    }
}
