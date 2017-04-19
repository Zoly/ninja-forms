/**
 * Forms Widget Table Body Collection View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [ 'views/widgets/formsTableRow', 'views/widgets/formsTableEmpty', 'models/formCollection' ], function( TableRowView, EmptyView, FormCollection ) {
    var view = Marionette.CollectionView.extend( {
        template: "#tmpl-nf-widget-forms-table",
        collection: new FormCollection(),
        childView: TableRowView,
        emptyView: EmptyView,
        tagName: 'tbody',

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
