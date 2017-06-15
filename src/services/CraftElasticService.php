<?php
/**
 * Craft Elastic plugin for Craft CMS 3.x
 *
 * Craft integration with Elasticsearch
 *
 * @link      https://dfo.no
 * @copyright Copyright (c) 2017 Peter Holme Obrestad
 */

namespace dfo\craftelastic\services;

use dfo\craftelastic\CraftElastic;

use Craft;
use craft\base\Component;

/**
 * CraftElasticService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Peter Holme Obrestad
 * @package   CraftElastic
 * @since     1.0.0
 */
class CraftElasticService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     CraftElastic::$plugin->craftElasticService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (CraftElastic::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }

    /*
    *
    * fra kristoffer
    *
    *

    __constructor {
        $config = Craft::$app->getConfig('elasticsearch')
        $this->client = new Elasticsearch($config)
    }

    public function index(array $elements = array()) {
        $this->client->index(array_map(function($element) {
            ...
        }, $elements))
    }

    public function indexSingle($element) {
        return $this->index([$element])
    }

    public function delete($element) {
        return $this->client->delete([
            'index' => 
            'type' => 
            'id' => $element->id,
        ])
    }

    */

}
