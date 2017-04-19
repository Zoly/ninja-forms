/**
 * Collection that holds our form models.
 *
 * @package Ninja Forms client
 * @copyright (c) 2017 WP Ninjas
 * @since 3.0
 */
define( ['models/formModel'], function( FormModel ) {
	var collection = Backbone.Collection.extend( {
		model: FormModel,
		comparator: function( model ){
            return parseInt( model.get( 'id' ) );
        },
		tmpNum: 1,
        url: function() {
            return ajaxurl + "?action=nf_get_forms";
        },

		initialize: function() {
			this.newIDs = [];
            this.fetch();
		},
        parse: function( response, options ){
		    return response.data;
        }
	} );
	return collection;
} );