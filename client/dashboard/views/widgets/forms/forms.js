/**
 * Forms Widget View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [
    'views/widgets/forms/formsFilterView',
    'views/widgets/forms/formsLayoutView',
    'views/widgets/forms/formsTemplatesCollectionView'
], function( FilterView, LayoutView, TemplatesView ) {
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
            this.showChildView( 'content', new LayoutView() );
        },
        
        events: {
            'click @ui.add': function(){
                this.showChildView( 'content', new TemplatesView() );
                nfRadio.channel( 'widget-forms' ).trigger( 'change:content' );
                this.getUI( 'add' ).hide();
                this.getUI( 'cancel' ).show();
            },
            'click @ui.cancel': function(){
                this.showChildView( 'content', new LayoutView() );
                nfRadio.channel( 'widget-forms' ).trigger( 'change:content' );
                this.getUI( 'cancel' ).hide();
                this.getUI( 'add' ).show();
            },
            'click @ui.more': function(){
                console.log('clicked more');
                this.getUI( 'more' ).hide();
                this.getUI( 'less' ).show();
            },
            'click @ui.less': function(){
                console.log('clicked less');
                this.getUI( 'less' ).hide();
                this.getUI( 'more' ).show();
            }
        }
    } );
    return view;
} );
