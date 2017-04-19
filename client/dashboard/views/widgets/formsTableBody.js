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
    } );
    return view;
} );
