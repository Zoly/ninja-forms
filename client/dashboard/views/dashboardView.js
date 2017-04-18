/**
 * Dashboard Layout View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [ 'views/sections/widgets.js', 'views/sections/apps.js', 'views/sections/memberships.js' ], function( WidgetView, AppsView, MembershipsView ) {
    var view = Marionette.View.extend( {
        template: "#tmpl-nf-dashboard",

        regions: {
            content: '.content'
        },

        events: {
            'click .widgets': function(){
                this.showChildView( 'content', new WidgetView() );
            },
            'click .apps': function(){
                this.showChildView( 'content', new AppsView() );
            },
            'click .memberships': function(){
                this.showChildView( 'content', new MembershipsView() );
            },
        },

        onRender: function() {
            this.showChildView( 'content', new WidgetView() );
        }
    } );
    return view;
} );
