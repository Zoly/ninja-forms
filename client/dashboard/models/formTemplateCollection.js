/**
 * Collection that holds our form models.
 *
 * @package Ninja Forms client
 * @copyright (c) 2017 WP Ninjas
 * @since 3.0
 */
define( ['models/formTemplateModel'], function( TemplateModel ) {
	var collection = Backbone.Collection.extend( {
		model: TemplateModel,
		tmpNum: 1,
        url: function() {
            return ajaxurl + "?action=nf_get_new_form_templates";
        },

		initialize: function() {
            this.fetch( {
                success: function(response) {console.log(response)},
                error: function(response) {console.log(response)},
            });
		}
        
	} );
	return collection;
} );