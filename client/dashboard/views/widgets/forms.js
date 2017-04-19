/**
 * Forms Widget View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [ 'views/widgets/formsFilter', 'views/widgets/formsTable', 'views/widgets/formsTemplates'], function( FilterView, TableView, TemplatesView ) {
    var view = Marionette.View.extend( {
        template: "#tmpl-nf-widget-forms",
        
        regions: {
            filter: '.filter',
            content: '.content'
        },
        
        onRender: function() {
            this.showChildView( 'filter', new FilterView() );
            this.showChildView( 'content', new TableView() );
        },
        
        events: {
            'click .add': function(){
                this.showChildView( 'content', new TemplatesView() );
                nfRadio.channel( 'widget-forms' ).trigger( 'clear:filter' );
            },
            'click .cancel': function(){
                this.showChildView( 'content', new TableView() );
                nfRadio.channel( 'widget-forms' ).trigger( 'clear:filter' );
            },
            'click .more': function(){
                console.log('clicked more');
            },
            'click .less': function(){
                console.log('clicked less');
            }
        }
    } );
    return view;
} );
