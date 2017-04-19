/**
 * Forms Widget Table Body Collection View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( [ 'views/widgets/formsTableRow', 'models/formCollection' ], function( TableRow, FormCollection ) {
    var view = Marionette.CollectionView.extend( {
        template: "#tmpl-nf-widget-forms-table",
        collection: new FormCollection(),
        childView: TableRow,
        tagName: 'tbody',
        
    } );
    return view;
} );
