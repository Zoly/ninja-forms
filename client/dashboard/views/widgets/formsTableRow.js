/**
 * Forms Widget Table Row View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [], function() {
    var view = Marionette.View.extend( {
        template: "#tmpl-nf-widget-forms-table-row",
        tagName: 'tr',
        className: 'forms-table-row'
    } );
    return view;
} );
