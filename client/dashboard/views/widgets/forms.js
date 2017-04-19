/**
 * Forms Widget View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( ['views/widgets/formsTable'], function( TableView ) {
    var view = Marionette.View.extend( {
        template: "#tmpl-nf-widget-forms",
        
        regions: {
            content: '.content'
        },
        
        onRender: function() {
            this.showChildView( 'content', new TableView() );
        }
    } );
    return view;
} );
