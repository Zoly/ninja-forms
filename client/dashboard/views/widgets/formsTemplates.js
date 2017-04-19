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
        template: "#tmpl-nf-forms-templates",
        collection: new TemplateCollection(),
        childView: TemplateView,
    } );
    return view;
} );
