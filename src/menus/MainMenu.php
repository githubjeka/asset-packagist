<?php

/*
 * Asset Packagist
 *
 * @link      https://github.com/hiqdev/asset-packagist
 * @package   asset-packagist
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assetpackagist\menus;

use Yii;

/**
 * Main menu.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class MainMenu extends \hiqdev\menumanager\Menu
{
    public function items()
    {
        return [
            'about' => [
                'label' => Yii::t('hisite', 'About'),
                'url' => ['/site/about'],
            ],
            'contact' => [
                'label' => Yii::t('hisite', 'Contact'),
                'url' => ['/site/contact'],
            ],
            'github' => [
                'label' => 'GitHub',
                'url' => 'https://github.com/hiqdev/asset-packagist',
            ],
        ];
    }
}
