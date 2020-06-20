<?php
/**
 * Translations for the submission value manager class
 *
 * @package LanternForms
 * @since 1.0.0
 */

namespace awsmug\Lantern_Forms\Translations;

use Leaves_And_Love\Plugin_Lib\Translations\Translations_Manager;

/**
 * Translations for the submission value manager class.
 *
 * @since 1.0.0
 */
class Translations_Submission_Value_Manager extends Translations_Manager {

	/**
	 * Initializes the translation strings.
	 *
	 * @since 1.0.0
	 */
	protected function init() {
		$this->translations = array(
			/* --- Submission Value --- */

			'db_insert_error'                     => __( 'Could not insert submission value into the database.', 'lantern-forms' ),
			'db_update_error'                     => __( 'Could not update submission value in the database.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_delete_error'                   => __( 'Could not delete submission value metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_update_error'                   => __( 'Could not update submission value metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			'db_fetch_error_missing_id'           => __( 'Could not fetch submission value from the database because it is missing an ID.', 'lantern-forms' ),
			'db_fetch_error'                      => __( 'Could not fetch submission value from the database.', 'lantern-forms' ),
			'db_delete_error_missing_id'          => __( 'Could not delete submission value from the database because it is missing an ID.', 'lantern-forms' ),
			'db_delete_error'                     => __( 'Could not delete submission value from the database.', 'lantern-forms' ),
			'meta_delete_all_error'               => __( 'Could not delete the submission value metadata. The submission value itself was deleted successfully though.', 'lantern-forms' ),

			/* --- REST Submission Values controller --- */

			'rest_invalid_id'                     => __( 'Invalid submission value ID.', 'lantern-forms' ),
			'rest_item_exists'                    => __( 'Cannot create an existing submission value.', 'lantern-forms' ),
			'rest_invalid_page_number'            => _x( 'The page number requested is larger than the number of pages available.', 'submission value endpoint', 'lantern-forms' ),
			'rest_cannot_edit_items'              => __( 'Sorry, you are not allowed to edit submission values.', 'lantern-forms' ),
			'rest_cannot_read_items'              => __( 'Sorry, you are not allowed to view submission values.', 'lantern-forms' ),
			'rest_cannot_edit_item'               => __( 'Sorry, you are not allowed to edit this submission value.', 'lantern-forms' ),
			'rest_cannot_read_item'               => __( 'Sorry, you are not allowed to view this submission value.', 'lantern-forms' ),
			'rest_cannot_create_items'            => __( 'Sorry, you are not allowed to create submission values.', 'lantern-forms' ),
			'rest_cannot_delete_item'             => __( 'Sorry, you are not allowed to delete this submission value.', 'lantern-forms' ),
			'rest_cannot_publish_item'            => __( 'Sorry, you are not allowed to publish this submission value.', 'lantern-forms' ),
			'rest_item_id_description'            => __( 'Unique identifier for the submission value.', 'lantern-forms' ),
			'rest_collection_include_description' => __( 'Limit result set to specific submission value IDs.', 'lantern-forms' ),
			'rest_collection_exclude_description' => __( 'Ensure result set excludes specific submission value IDs.', 'lantern-forms' ),
			'rest_collection_orderby_description' => __( 'Sort collection by submission value attribute.', 'lantern-forms' ),
			'rest_collection_order_description'   => __( 'Order submission value sort attribute ascending or descending.', 'lantern-forms' ),

		);
	}
}
