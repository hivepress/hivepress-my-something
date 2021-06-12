<?php
/**
 * My something component.
 *
 * @package HivePress\Components
 */

namespace HivePress\Components;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * My something class.
 *
 * @class My_Something
 */
final class My_Something extends Component {

	/**
	 * Class constructor.
	 *
	 * @param array $args Component arguments.
	 */
	public function __construct( $args = [] ) {

		// Register callbacks here.
		add_action( 'some_hook', [ $this, 'do_something' ] );

		parent::__construct( $args );
	}

	/**
	 * Custom callback.
	 */
	public function do_something() {
		// Do something here.
	}
}
