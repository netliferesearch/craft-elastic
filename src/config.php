<?php
/**
 * Craft Elastic plugin for Craft CMS 3.x
 *
 * Craft integration with Elasticsearch
 *
 * @link      https://dfo.no
 * @copyright Copyright (c) 2017 Peter Holme Obrestad
 */

/**
 * Craft Elastic config.php
 *
 * This file exists only as a template for the Craft Elastic settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'craftelastic.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

    // The Elasticsearch Host
    'elasticHosts'  => '127.0.0.1:9200',
    'elasticIndex' => 'craft'

];
