/**
 * Craft Elastic plugin for Craft CMS
 *
 * CraftElasticUtility Utility JS
 *
 * @author    Peter Holme Obrestad
 * @copyright Copyright (c) 2017 Peter Holme Obrestad
 * @link      https://dfo.no
 * @package   CraftElastic
 * @since     1.0.0
 */

var $form = $('#craft-elastic-form');
var $action = $('input[name="action"]').val();
var $submit = $('#craft-elastic-submit');
var $spinner = $('#query-spinner');
var $results = $('#craft-elastic-result');
var $executing = false;

$form.on('submit', function(ev) {
    ev.preventDefault();

    if ($executing) {
        return;
    }

    $submit.addClass('active');
    $spinner.removeClass('hidden');
    $executing = true;

    Craft.postActionRequest($action, function($response) {
        $submit.removeClass('active');
        $spinner.addClass('hidden');
        $executing = false;
        $results.html($response);
    });
});
