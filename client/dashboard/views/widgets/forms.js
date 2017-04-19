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

        ui: {
            add: '.add',
            cancel: '.cancel',
            more: '.more',
            less: '.less'
        },
        
        onRender: function() {
            this.getUI( 'cancel' ).hide();
            this.getUI( 'less' ).hide();
            this.showChildView( 'filter', new FilterView() );
            this.showChildView( 'content', new TableView() );
        },
        
        events: {
            'click .add': function(){
                this.showChildView( 'content', new TemplatesView() );
                nfRadio.channel( 'widget-forms' ).trigger( 'clear:filter' );
                this.getUI( 'add' ).hide();
                this.getUI( 'cancel' ).show();
            },
            'click .cancel': function(){
                this.showChildView( 'content', new TableView() );
                nfRadio.channel( 'widget-forms' ).trigger( 'clear:filter' );
                this.getUI( 'cancel' ).hide();
                this.getUI( 'add' ).show();
            },
            'click .more': function(){
                console.log('clicked more');
                this.getUI( 'more' ).hide();
                this.getUI( 'less' ).show();
            },
            'click .less': function(){
                console.log('clicked less');
                this.getUI( 'less' ).hide();
                this.getUI( 'more' ).show();
            }
        }
    } );
    return view;
} );
