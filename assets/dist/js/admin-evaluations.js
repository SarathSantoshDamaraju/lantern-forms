/*!
 * Lantern Forms Version 1.0.7 (https://lantern-forms.com)
 * Licensed under GNU General Public License v2 (or later) (http://www.gnu.org/licenses/gpl-2.0.html)
 */
( function( $, ajaxurl ) {
	'use strict';

	$( '.lantern-evaluations-tab' ).on( 'click', function( e ) {
		var $this = $( this );
		var $all  = $this.parent().children( '.lantern-evaluations-tab' );

		e.preventDefault();

		if ( 'true' === $this.attr( 'aria-selected' ) ) {
			return;
		}

		$all.each( function() {
			$( this ).attr( 'aria-selected', 'false' );
			$( '#' + $( this ).attr( 'aria-controls' ) ).attr( 'aria-hidden', 'true' );
		});

		$this.attr( 'aria-selected', 'true' );
		$( '#' + $this.attr( 'aria-controls' ) ).attr( 'aria-hidden', 'false' ).find( '.lantern-evaluations-results' ).each( function() {
			$( this ).trigger( 'refresh' );
		});
	});

	$( '.lantern-evaluations-subtab' ).on( 'click', function( e ) {
		var $this = $( this );
		var $all  = $this.parent().children( '.lantern-evaluations-subtab' );

		e.preventDefault();

		if ( 'true' === $this.attr( 'aria-selected' ) ) {
			return;
		}

		$all.each( function() {
			$( this ).attr( 'aria-selected', 'false' );
			$( '#' + $( this ).attr( 'aria-controls' ) ).attr( 'aria-hidden', 'true' );
		});

		$this.attr( 'aria-selected', 'true' );
		$( '#' + $this.attr( 'aria-controls' ) ).attr( 'aria-hidden', 'false' );
	});

	$( '.handlediv' ).on( 'click', function() {
		var $button = $( this );
		var $postbox = $button.parent( '.postbox' );
		var closed, hidden;

		$postbox.toggleClass( 'closed' );

		$button.attr( 'aria-expanded', ! $postbox.hasClass( 'closed' ) );

		closed = $( '.postbox' ).filter( '.closed' ).map( function() {
			return this.id;
		}).get().join( ',' );

		hidden = $( '.postbox' ).filter( ':hidden' ).map( function() {
			return this.id;
		}).get().join( ',' );

		$.post( ajaxurl, {
			action: 'closed-postboxes',
			closed: closed,
			hidden: hidden,
			closedpostboxesnonce: $( '#closedpostboxesnonce' ).val(),
			page: $( '#closedpostboxespage' ).val()
		});
	});

}( window.jQuery, window.ajaxurl ) );
