<?php
/**
 * Json plugin for Craft CMS 3.x
 *
 * @link      https://fractorr.com/
 * @copyright Copyright (c) 2017 fractorr
 * @license   MIT License https://opensource.org/licenses/MIT
 */

namespace fractorr\json;

use fractorr\json\services\JsonService;
use fractorr\json\twigextensions\JsonTwigExtension;

use Craft;
use craft\base\Plugin;

/**
 * Class Json
 *
 * @author    fractorr
 * @package   Json
 * @since     1.1.0
 *
 * @property  Json Service    jsondecode
 */
class Json extends Plugin
{
    /**
     * @var Json
     */
    public static $plugin;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;
        $this->name = $this->getName();

        // Add in our Twig extensions
        Craft::$app->view->twig->addExtension(new JsonTwigExtension());

        Craft::info(
            Craft::t(
                'json',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    /**
     * Returns the user-facing name of the plugin, which can override the name
     * in composer.json
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t('json', 'Json');
    }
}
