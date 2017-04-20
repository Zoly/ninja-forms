/**
 * Forms Widget Table View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [ 'views/widgets/forms/formsCollectionView' ], function( FormsCollectionView ) {
    var view = Marionette.View.extend( {
        template: "#tmpl-nf-widget-forms-layout",

        regions: {
            content: '.content'
        },

        onRender: function() {
            this.showChildView( 'content', new FormsCollectionView() );
        }
        
    } );
    return view;
} );
