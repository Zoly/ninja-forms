/**
 * Forms Widget Table Body Collection View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [
    'views/widgets/forms/formsModelView',
    'views/widgets/forms/formsEmptyView',
    'models/formCollection'
], function( FormsModelView, FormsEmptyView, FormCollection ) {
    var view = Marionette.CollectionView.extend( {
        template: "#tmpl-nf-widget-forms-collection",
        collection: new FormCollection(),
        childView: FormsModelView,
        emptyView: FormsEmptyView,
        className: 'forms-collection',

        initialize: function(){
            this.listenTo( nfRadio.channel( 'widget-forms' ), 'update:filter', this.updateFilter );
        },

        updateFilter: function( term ){
            this.setFilter(function (child, index, collection) {
                return 0 <= child.get( 'title' ).toLowerCase().indexOf( term.toLowerCase() );
            });
        }
    } );
    return view;
} );
