<?php
/**
 * Submission CLI command class
 *
 * @package LanternForms
 * @since 1.0.0
 */

namespace awsmug\Lantern_Forms\DB_Objects\Submissions;

use Leaves_And_Love\Plugin_Lib\DB_Objects\CLI_Models_Command;

/**
 * Class to access submissions via WP-CLI.
 *
 * @since 1.0.0
 */
class CLI_Submissions_Command extends CLI_Models_Command {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 *
	 * @param Manager $manager The manager instance.
	 */
	public function __construct( $manager ) {
		parent::__construct( $manager );

		$this->obj_fields = array( 'id', 'form_id', 'user_id', 'timestamp', 'remote_addr', 'user_key', 'status' );
	}
}
