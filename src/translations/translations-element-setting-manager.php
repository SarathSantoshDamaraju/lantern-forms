<?php
/**
 * Translations for the element setting manager class
 *
 * @package LanternForms
 * @since 1.0.0
 */

namespace awsmug\Lantern_Forms\Translations;

use Leaves_And_Love\Plugin_Lib\Translations\Translations_Manager;

/**
 * Translations for the element setting manager class.
 *
 * @since 1.0.0
 */
class Translations_Element_Setting_Manager extends Translations_Manager {

	/**
	 * Initializes the translation strings.
	 *
	 * @since 1.0.0
	 */
	protected function init() {
		$this->translations = array(
			/* --- Element Setting --- */

			'db_insert_error'                     => __( 'Could not insert element setting into the database.', 'lantern-forms' ),
			'db_update_error'                     => __( 'Could not update element setting in the database.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_delete_error'                   => __( 'Could not delete element setting metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_update_error'                   => __( 'Could not update element setting metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			'db_fetch_error_missing_id'           => __( 'Could not fetch element setting from the database because it is missing an ID.', 'lantern-forms' ),
			'db_fetch_error'                      => __( 'Could not fetch element setting from the database.', 'lantern-forms' ),
			'db_delete_error_missing_id'          => __( 'Could not delete element setting from the database because it is missing an ID.', 'lantern-forms' ),
			'db_delete_error'                     => __( 'Could not delete element setting from the database.', 'lantern-forms' ),
			'meta_delete_all_error'               => __( 'Could not delete the element setting metadata. The element setting itself was deleted successfully though.', 'lantern-forms' ),

			/* --- REST Element Settings controller --- */

			'rest_invalid_id'                     => __( 'Invalid element setting ID.', 'lantern-forms' ),
			'rest_item_exists'                    => __( 'Cannot create an existing element setting.', 'lantern-forms' ),
			'rest_invalid_page_number'            => _x( 'The page number requested is larger than the number of pages available.', 'element setting endpoint', 'lantern-forms' ),
			'rest_cannot_edit_items'              => __( 'Sorry, you are not allowed to edit element settings.', 'lantern-forms' ),
			'rest_cannot_read_items'              => __( 'Sorry, you are not allowed to view element settings.', 'lantern-forms' ),
			'rest_cannot_edit_item'               => __( 'Sorry, you are not allowed to edit this element setting.', 'lantern-forms' ),
			'rest_cannot_read_item'               => __( 'Sorry, you are not allowed to view this element setting.', 'lantern-forms' ),
			'rest_cannot_create_items'            => __( 'Sorry, you are not allowed to create element settings.', 'lantern-forms' ),
			'rest_cannot_delete_item'             => __( 'Sorry, you are not allowed to delete this element setting.', 'lantern-forms' ),
			'rest_cannot_publish_item'            => __( 'Sorry, you are not allowed to publish this element setting.', 'lantern-forms' ),
			'rest_item_id_description'            => __( 'Unique identifier for the element setting.', 'lantern-forms' ),
			'rest_collection_include_description' => __( 'Limit result set to specific element setting IDs.', 'lantern-forms' ),
			'rest_collection_exclude_description' => __( 'Ensure result set excludes specific element setting IDs.', 'lantern-forms' ),
			'rest_collection_orderby_description' => __( 'Sort collection by element setting attribute.', 'lantern-forms' ),
			'rest_collection_order_description'   => __( 'Order element setting sort attribute ascending or descending.', 'lantern-forms' ),

		);
	}
}
