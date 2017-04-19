/**
 * Forms Widget Table View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [ 'views/widgets/formsTableBody' ], function( TableBody ) {
    var view = Marionette.View.extend( {
        template: "#tmpl-nf-widget-forms-table",
        tagName: 'table',
        regions: {
            body: {
                el: 'tbody',
                replaceElement: true
            }
        },
        onRender: function() {
            this.showChildView( 'body', new TableBody() );
        }
        
    } );
    return view;
} );
