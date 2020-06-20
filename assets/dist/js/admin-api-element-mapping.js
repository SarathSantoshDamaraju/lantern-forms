/*!
 * Lantern Forms Version 1.0.7 (https://lantern-forms.com)
 * Licensed under GNU General Public License v2 (or later) (http://www.gnu.org/licenses/gpl-2.0.html)
 */
( function( lantern, $, elementMappings ) {
	'use strict';

	var apiAction, i;

	for ( i in elementMappings ) {
		apiAction = elementMappings[ i ];
		console.log( apiAction );
	}

}( window.lantern, window.jQuery, window.lanternAPIElementMappings || [] ) );
