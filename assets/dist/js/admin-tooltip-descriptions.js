/*!
 * Lantern Forms Version 1.0.7 (https://lantern-forms.com)
 * Licensed under GNU General Public License v2 (or later) (http://www.gnu.org/licenses/gpl-2.0.html)
 */
( function( $ ) {
	'use strict';

	$( '.has-lantern-tooltip-description .content-wrap > .description' ).each( function() {
		$( this )
			.addClass( 'lantern-tooltip-description' )
			.wrap( '<div class="lantern-tooltip-wrap" />' )
			.before( '<span class="lantern-tooltip-button dashicons dashicons-info" aria-hidden="true" />' );
	});

})( window.jQuery );
