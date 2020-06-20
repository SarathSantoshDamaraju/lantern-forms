/*!
 * Lantern Forms Version 1.0.7 (https://lantern-forms.com)
 * Licensed under GNU General Public License v2 (or later) (http://www.gnu.org/licenses/gpl-2.0.html)
 */
window.lantern = window.lantern || {};

( function( lantern, $, _, wp, wpApiSettings ) {
	var apiPromise;

	lantern.api = {
		collections: {},

		models: {},

		root: wpApiSettings.root || window.location.origin + '/wp-json/',

		versionString: 'lantern/v1/',

		init: function() {
			var deferred;

			if ( ! apiPromise ) {
				deferred = $.Deferred();
				apiPromise = deferred.promise();

				wp.api.init({ versionString: lantern.api.versionString })
					.done( function() {
						var origUrl = wp.api.collections.ElementsTypes.prototype.url;

						lantern.api.collections = _.extend( lantern.api.collections, {
							Forms: wp.api.collections.Forms,
							FormCategories: wp.api.collections.Form_categories,
							Containers: wp.api.collections.Containers,
							Elements: wp.api.collections.Elements,
							ElementTypes: wp.api.collections.ElementsTypes.extend({
								url: function() {
									/* Fix bug in element types URL. */
									return origUrl.call( this ).replace( 'elements//types', 'elements/types' );
								}
							}),
							ElementChoices: wp.api.collections.Element_choices,
							ElementSettings: wp.api.collections.Element_settings,
							Submissions: wp.api.collections.Submissions,
							SubmissionValues: wp.api.collections.Submission_values,
							Participants: wp.api.collections.Participants
						});

						lantern.api.models = _.extend( lantern.api.models, {
							Form: wp.api.models.Forms,
							FormCategory: wp.api.models.Form_categories,
							Container: wp.api.models.Containers,
							Element: wp.api.models.Elements,
							ElementType: wp.api.models.ElementsTypes,
							ElementChoice: wp.api.models.Element_choices,
							ElementSetting: wp.api.models.Element_settings,
							Submission: wp.api.models.Submissions,
							SubmissionValue: wp.api.models.Submission_values,
							Participant: wp.api.models.Participants
						});

						deferred.resolveWith( lantern.api );
					})
					.fail( function() {
						deferred.rejectWith( lantern.api );
					});
			}

			return apiPromise;
		}
	};

	lantern.template = function( id ) {
		return wp.template( 'lantern-' + id );
	};

	lantern.isTempId = function( id ) {
		return _.isString( id ) && 'temp_id_' === id.substring( 0, 8 );
	};

	lantern.generateTempId = function() {
		var random = Math.floor( Math.random() * ( 10000 - 10 + 1 ) ) + 10;

		random = random * ( new Date() ).getTime();
		random = random.toString();

		return ( 'temp_id_' + random ).substring( 0, 14 );
	};

	lantern.escapeSelector = function( selector ) {
		var pattern, replacement;

		if ( 'function' === typeof $.escapeSelector ) {
			return $.escapeSelector( selector );
		}

		pattern = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g;

		replacement = function( ch, asCodePoint ) {
			if ( asCodePoint ) {
				if ( '\0' === ch ) {
					return '\uFFFD';
				}

				return ch.slice( 0, -1 ) + '\\' + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + ' ';
			}

			return '\\' + ch;
		};

		return selector.replace( pattern, replacement );
	};

}( window.lantern, window.jQuery, window._, window.wp, window.wpApiSettings || {} ) );
