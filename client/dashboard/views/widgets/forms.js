/**
 * Forms Widget View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( ['views/widgets/formsTable', 'views/widgets/formsTemplates'], function( TableView, TemplatesView ) {
    var view = Marionette.View.extend( {
        template: "#tmpl-nf-widget-forms",
        
        regions: {
            content: '.content'
        },
        
        onRender: function() {
            this.showChildView( 'content', new TableView() );
        },
        
        events: {
            'click .add': function(){
                this.showChildView( 'content', new TemplatesView() );
            },
            'click .cancel': function(){
                this.showChildView( 'content', new TableView() );
            },
            'click .more': function(){
                console.log('clicked more');
            },
            'click .less': function(){
                console.log('clicked less');
            },
            'keyup .filter input': function( e ){
                var term = jQuery( e.target ).val();
                nfRadio.channel( 'widget-forms' ).trigger( 'update:filter', term );
            }
        },
    } );
    return view;
} );
