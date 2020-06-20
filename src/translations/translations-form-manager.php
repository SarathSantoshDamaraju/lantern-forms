<?php
/**
 * Translations for the form manager class
 *
 * @package LanternForms
 * @since 1.0.0
 */

namespace awsmug\Lantern_Forms\Translations;

use Leaves_And_Love\Plugin_Lib\Translations\Translations_Manager;

/**
 * Translations for the form manager class.
 *
 * @since 1.0.0
 */
class Translations_Form_Manager extends Translations_Manager {

	/**
	 * Initializes the translation strings.
	 *
	 * @since 1.0.0
	 */
	protected function init() {
		$this->translations = array(
			/* --- Form --- */

			'db_insert_error'                     => __( 'Could not insert form into the database.', 'lantern-forms' ),
			'db_update_error'                     => __( 'Could not update form in the database.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_delete_error'                   => __( 'Could not delete form metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			/* translators: %s: meta key */
			'meta_update_error'                   => __( 'Could not update form metadata for key &#8220;%s&#8221;.', 'lantern-forms' ),
			'db_fetch_error_missing_id'           => __( 'Could not fetch form from the database because it is missing an ID.', 'lantern-forms' ),
			'db_fetch_error'                      => __( 'Could not fetch form from the database.', 'lantern-forms' ),
			'db_delete_error_missing_id'          => __( 'Could not delete form from the database because it is missing an ID.', 'lantern-forms' ),
			'db_delete_error'                     => __( 'Could not delete form from the database.', 'lantern-forms' ),
			'meta_delete_all_error'               => __( 'Could not delete the form metadata. The form itself was deleted successfully though.', 'lantern-forms' ),

			/* --- REST Forms controller --- */

			'rest_invalid_id'                     => __( 'Invalid form ID.', 'lantern-forms' ),
			'rest_item_exists'                    => __( 'Cannot create an existing form.', 'lantern-forms' ),
			'rest_invalid_page_number'            => _x( 'The page number requested is larger than the number of pages available.', 'form endpoint', 'lantern-forms' ),
			'rest_cannot_edit_items'              => __( 'Sorry, you are not allowed to edit forms.', 'lantern-forms' ),
			'rest_cannot_read_items'              => __( 'Sorry, you are not allowed to view forms.', 'lantern-forms' ),
			'rest_cannot_read_others_items'       => __( 'Sorry, you are not allowed to view forms by this user.', 'lantern-forms' ),
			'rest_cannot_edit_item'               => __( 'Sorry, you are not allowed to edit this form.', 'lantern-forms' ),
			'rest_cannot_edit_others_item'        => __( 'Sorry, you are not allowed to edit a form as this user.', 'lantern-forms' ),
			'rest_cannot_read_item'               => __( 'Sorry, you are not allowed to view this form.', 'lantern-forms' ),
			'rest_cannot_create_items'            => __( 'Sorry, you are not allowed to create forms.', 'lantern-forms' ),
			'rest_cannot_create_others_items'     => __( 'Sorry, you are not allowed to create forms as this user.', 'lantern-forms' ),
			'rest_cannot_delete_item'             => __( 'Sorry, you are not allowed to delete this form.', 'lantern-forms' ),
			'rest_cannot_publish_item'            => __( 'Sorry, you are not allowed to publish this form.', 'lantern-forms' ),
			'rest_item_id_description'            => __( 'Unique identifier for the form.', 'lantern-forms' ),
			'rest_item_slug_description'          => __( 'A unique alphanumeric identifier for the form.', 'lantern-forms' ),
			'rest_item_title_description'         => __( 'The form title.', 'lantern-forms' ),
			'rest_collection_include_description' => __( 'Limit result set to specific form IDs.', 'lantern-forms' ),
			'rest_collection_exclude_description' => __( 'Ensure result set excludes specific form IDs.', 'lantern-forms' ),
			'rest_collection_orderby_description' => __( 'Sort collection by form attribute.', 'lantern-forms' ),
			'rest_collection_order_description'   => __( 'Order form sort attribute ascending or descending.', 'lantern-forms' ),
			'rest_collection_slug_description'    => __( 'Limit result set to forms with one or more specific slugs.', 'lantern-forms' ),
			'rest_collection_title_description'   => __( 'Limit result set to forms with a specific title.', 'lantern-forms' ),

		);
	}
}
