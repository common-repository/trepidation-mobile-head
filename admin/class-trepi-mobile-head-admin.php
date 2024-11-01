<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://trepidation.co.uk
 * @since      1.0.0
 *
 * @package    trepi_mobile_head
 * @subpackage trepi_mobile_head/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    trepi_mobile_head
 * @subpackage trepi_mobile_head/admin
 * @author     Colin Gell <colin@trepidation.co.uk>
 */
class trepi_mobile_head_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $trepi_mobile_head    The ID of this plugin.
	 */
	private $trepi_mobile_head;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $trepi_mobile_head       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $trepi_mobile_head, $version ) {

		$this->trepi_mobile_head = $trepi_mobile_head;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in trepi_mobile_head_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The trepi_mobile_head_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->trepi_mobile_head, plugin_dir_url( __FILE__ ) . 'css/trepi-mobile-head-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in trepi_mobile_head_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The trepi_mobile_head_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->trepi_mobile_head, plugin_dir_url( __FILE__ ) . 'js/trepi-mobile-head-admin.js', array( 'jquery' ), $this->version, false );

	}

}
