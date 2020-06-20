<?php
/**
 * Translations for the element choice manager class
 *
 * @package LanternForms
 * @since 1.0.0
 */

namespace awsmug\Lantern_Forms\Translations;

use Leaves_And_Love\Plugin_Lib\Translations\Translations_Manager;

/**
 * Translations for the element choice manager class.
 *
 * @since 1.0.0
 */
class Translations_Element_Choice_Manager extends Translations_Manager {

	/**
	 * Initializes the translation strings.
	 *
	 * @since 1.0.0
	 */
	protected function init() {
		$this->translations = array(
			/* --- Element Choice --- */

			'db_insert_error'                     => __( 'Could not insert element choice into the database.', 'lantern-forms' ),
			'db_update_error'                     => __( 'Could not update element choice in the database.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_delete_error'                   => __( 'Could not delete element choice metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_update_error'                   => __( 'Could not update element choice metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			'db_fetch_error_missing_id'           => __( 'Could not fetch element choice from the database because it is missing an ID.', 'lantern-forms' ),
			'db_fetch_error'                      => __( 'Could not fetch element choice from the database.', 'lantern-forms' ),
			'db_delete_error_missing_id'          => __( 'Could not delete element choice from the database because it is missing an ID.', 'lantern-forms' ),
			'db_delete_error'                     => __( 'Could not delete element choice from the database.', 'lantern-forms' ),
			'meta_delete_all_error'               => __( 'Could not delete the element choice metadata. The element choice itself was deleted successfully though.', 'lantern-forms' ),

			/* --- REST Element Choices controller --- */

			'rest_invalid_id'                     => __( 'Invalid element choice ID.', 'lantern-forms' ),
			'rest_item_exists'                    => __( 'Cannot create an existing element choice.', 'lantern-forms' ),
			'rest_invalid_page_number'            => _x( 'The page number requested is larger than the number of pages available.', 'element choice endpoint', 'lantern-forms' ),
			'rest_cannot_edit_items'              => __( 'Sorry, you are not allowed to edit element choices.', 'lantern-forms' ),
			'rest_cannot_read_items'              => __( 'Sorry, you are not allowed to view element choices.', 'lantern-forms' ),
			'rest_cannot_edit_item'               => __( 'Sorry, you are not allowed to edit this element choice.', 'lantern-forms' ),
			'rest_cannot_read_item'               => __( 'Sorry, you are not allowed to view this element choice.', 'lantern-forms' ),
			'rest_cannot_create_items'            => __( 'Sorry, you are not allowed to create element choices.', 'lantern-forms' ),
			'rest_cannot_delete_item'             => __( 'Sorry, you are not allowed to delete this element choice.', 'lantern-forms' ),
			'rest_cannot_publish_item'            => __( 'Sorry, you are not allowed to publish this element choice.', 'lantern-forms' ),
			'rest_item_id_description'            => __( 'Unique identifier for the element choice.', 'lantern-forms' ),
			'rest_item_title_description'         => __( 'The element choice value.', 'lantern-forms' ),
			'rest_collection_include_description' => __( 'Limit result set to specific element choice IDs.', 'lantern-forms' ),
			'rest_collection_exclude_description' => __( 'Ensure result set excludes specific element choice IDs.', 'lantern-forms' ),
			'rest_collection_orderby_description' => __( 'Sort collection by element choice attribute.', 'lantern-forms' ),
			'rest_collection_order_description'   => __( 'Order element choice sort attribute ascending or descending.', 'lantern-forms' ),
			'rest_collection_title_description'   => __( 'Limit result set to element choices with a specific value.', 'lantern-forms' ),

		);
	}
}
