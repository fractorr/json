<?php
/**
 * JSON Decode plugin for Craft CMS 3.x
 *
 * @link      https://fractorr.com/
 * @copyright Copyright (c) 2017 fractorr
 * @license   MIT License https://opensource.org/licenses/MIT
 */

namespace fractorr\json\twigextensions;

use fractorr\json\Json;

use Craft;

/**
 * Jsondecode twig extension
 *
 * @author    fractorr
 * @package   JSONDecode
 * @since     1.0.0
 */
class JsonTwigExtension extends \Twig_Extension
{

    /**
     * Return our Twig Extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'Json';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('json_decode', [$this, 'json_decode']),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('json_decode', [$this, 'json_decode']),
        ];
    }

    /**
     * Json decode
     *
     * @param $name
     *
     * @return mixed
     */
    public function json_decode($name)
    {
        return Json::$plugin->json->json_decode($name);
    }
}
