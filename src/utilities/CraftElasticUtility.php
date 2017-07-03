<?php
/**
 * Craft Elastic plugin for Craft CMS 3.x
 *
 * Craft integration with Elasticsearch
 *
 * @link      https://dfo.no
 * @copyright Copyright (c) 2017 Peter Holme Obrestad
 */

namespace dfo\craftelastic\utilities;

use dfo\craftelastic\CraftElastic;
use dfo\craftelastic\assetbundles\craftelasticutilityutility\CraftElasticUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * Craft Elastic Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    Peter Holme Obrestad
 * @package   CraftElastic
 * @since     1.0.0
 */
class CraftElasticUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('craftelastic', 'Elasticsearch');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'craftelastic-craft-elastic-utility';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@dfo/craftelastic/assetbundles/craftelasticutilityutility/dist/img/CraftElasticUtility-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(CraftElasticUtilityUtilityAsset::class);
        $pageTitle = self::displayName();

        // $es = CraftElastic::$plugin->craftElasticService;
        $es = CraftElastic::$plugin->craftElasticService->client();

        $elasticIndex = CraftElastic::$plugin->getSettings()->elasticIndex;

        $elasticIndexExists = $es->indices()->exists([ 
            'index' => $elasticIndex
        ]);
        
        //var_dump($response);

        return Craft::$app->getView()->renderTemplate(
            'craftelastic/_components/utilities/CraftElasticUtility_content',
            [
                'pageTitle' => $pageTitle,
                'elasticIndex' => $elasticIndex,
                'elasticIndexExists' => $elasticIndexExists
            ]
        );
    }
}
