/**
 * Forms Widget Templates View
 *
 * @package Ninja Forms
 * @subpackage Dashboard
 * @copyright (c) 2017 WP Ninjas
 * @since 3.2
 */
define( ['models/formTemplateCollection', 'views/widgets/formsTemplate'], function( TemplateCollection, TemplateView ) {
    var view = Marionette.CollectionView.extend( {
        tagName: 'div',
        className: 'templateList',
        collection: new TemplateCollection(),
        childView: TemplateView,
    } );
    return view;
} );
