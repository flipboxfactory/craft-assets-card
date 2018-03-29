<?php

/**
 * @copyright  Copyright (c) Flipbox Digital Limited
 * @license    https://github.com/flipboxfactory/craft-assets-card/blob/master/LICENSE
 * @link       https://github.com/flipboxfactory/craft-assets-card
 */

namespace flipbox\craft\assets\card;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author Flipbox Factory <hello@flipboxfactory.com>
 * @since 1.0.0
 */
class Card extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/dist';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->css = [
            'Card.css'
        ];

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public $depends = [
        CpAsset::class,
    ];
}
