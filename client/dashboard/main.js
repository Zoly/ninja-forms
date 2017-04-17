var nfRadio = Backbone.Radio;
var nfDebug = false;

jQuery( document ).ready( function( $ ) {
    require( [ 'views/dashboardView' ], function( DashboardView ) {

        var NinjaFormsDashboard = Marionette.Application.extend( {

            // The root element for the application.
            region: '#ninja-forms-dashboard',

            initialize: function( options ) {

                // Assign this instance to a named variable.
                var dashboard = this;

                // Override the Renderer for WordPress compatibility.
                Marionette.Renderer.render = function(template, data){
                    var template = dashboard.template( template );
                    return template( data );
                };

                /* DEBUG */ if( nfDebug ) console.log( 'Dashboard Initialized' );
            },

            onStart: function() {

                // Show the root view for the application.
                this.showView(new DashboardView());

                /* DEBUG */ if( nfDebug ) console.log( 'Dashboard Started' );
            },

            /**
             * Custom render function for WordPress style templates.
             * @param template
             */
            template: function( template ) {
                return _.template( $( template ).html(),  {
                    evaluate:    /<#([\s\S]+?)#>/g,
                    interpolate: /\{\{\{([\s\S]+?)\}\}\}/g,
                    escape:      /\{\{([^\}]+?)\}\}(?!\})/g,
                    variable:    'data'
                } );
            }
        } );

        var nfDashboard = new NinjaFormsDashboard();
        nfDashboard.start();
    } );
} );