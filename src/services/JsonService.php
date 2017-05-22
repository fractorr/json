<?php
/**
 * JSON Decode plugin for Craft CMS 3.x
 *
 * @link      https://fractorr.com/
 * @copyright Copyright (c) 2017 fractorr
 * @license   MIT License https://opensource.org/licenses/MIT
 */

namespace fractorr\json\services;

use Craft;
use craft\base\Component;

/**
 * JSON Decode service
 *
 * @author    fractorr
 * @package   JSONDecode
 * @since     1.0.0
 */
class JsonService extends Component
{
    /**
     * Json decode
     *
     * @param string $name
     *
     * @return mixed
     */
    public function json_decode($name = "")
    {
		return json_decode($name);
    }
}
