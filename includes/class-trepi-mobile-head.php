<?php



/**

 * The file that defines the core plugin class

 *

 * A class definition that includes attributes and functions used across both the

 * public-facing side of the site and the admin area.

 *

 * @link       http://trepidation.co.uk

 * @since      1.0.0

 *

 * @package    trepi_mobile_head

 * @subpackage trepi_mobile_head/includes

 */



/**

 * The core plugin class.

 *

 * This is used to define internationalization, admin-specific hooks, and

 * public-facing site hooks.

 *

 * Also maintains the unique identifier of this plugin as well as the current

 * version of the plugin.

 *

 * @since      1.0.0

 * @package    trepi_mobile_head

 * @subpackage trepi_mobile_head/includes

 * @author     Colin Gell <colin@trepidation.co.uk>

 */

class trepi_mobile_head {



	/**

	 * The loader that's responsible for maintaining and registering all hooks that power

	 * the plugin.

	 *

	 * @since    1.0.0

	 * @access   protected

	 * @var      trepi_mobile_head_Loader    $loader    Maintains and registers all hooks for the plugin.

	 */

	protected $loader;



	/**

	 * The unique identifier of this plugin.

	 *

	 * @since    1.0.0

	 * @access   protected

	 * @var      string    $trepi_mobile_head    The string used to uniquely identify this plugin.

	 */

	protected $trepi_mobile_head;



	/**

	 * The current version of the plugin.

	 *

	 * @since    1.0.0

	 * @access   protected

	 * @var      string    $version    The current version of the plugin.

	 */

	protected $version;



	/**

	 * Define the core functionality of the plugin.

	 *

	 * Set the plugin name and the plugin version that can be used throughout the plugin.

	 * Load the dependencies, define the locale, and set the hooks for the admin area and

	 * the public-facing side of the site.

	 *

	 * @since    1.0.0

	 */

	public function __construct() {



		$this->trepi_mobile_head = 'trepi-mobile-head';

		$this->version = '1.0.0';



		$this->load_dependencies();

		$this->set_locale();

		$this->define_admin_hooks();

		$this->define_public_hooks();



	}



	/**

	 * Load the required dependencies for this plugin.

	 *

	 * Include the following files that make up the plugin:

	 *

	 * - trepi_mobile_head_Loader. Orchestrates the hooks of the plugin.

	 * - trepi_mobile_head_i18n. Defines internationalization functionality.

	 * - trepi_mobile_head_Admin. Defines all hooks for the admin area.

	 * - trepi_mobile_head_Public. Defines all hooks for the public side of the site.

	 *

	 * Create an instance of the loader which will be used to register the hooks

	 * with WordPress.

	 *

	 * @since    1.0.0

	 * @access   private

	 */

	private function load_dependencies() {



		/**

		 * The class responsible for adding custom code to the head

		 * core plugin.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-trepi-mobile-head-after-body.php';

		/**

		 * The class responsible for adding custom code to the head

		 * core plugin.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-trepi-mobile-head-add-to-head.php';

                /**

		 * The class responsible for adding custom code to the footer

		 * core plugin.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-trepi-mobile-head-add-to-footer.php';



                 /**

		 * The class responsible for adding controllers for the navigation menu in customiser

		 * core plugin.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/trepi-mobile-head-customiser-settings.php';

		/**

		 * The class responsible for orchestrating the actions and filters of the

		 * core plugin.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-trepi-mobile-head-loader.php';



		/**

		 * The class responsible for defining internationalization functionality

		 * of the plugin.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-trepi-mobile-head-i18n.php';



		/**

		 * The class responsible for defining all actions that occur in the admin area.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-trepi-mobile-head-admin.php';



		/**

		 * The class responsible for defining all actions that occur in the public-facing

		 * side of the site.

		 */

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-trepi-mobile-head-public.php';
		
		




		$this->loader = new trepi_mobile_head_Loader();



	}



	/**

	 * Define the locale for this plugin for internationalization.

	 *

	 * Uses the trepi_mobile_head_i18n class in order to set the domain and to register the hook

	 * with WordPress.

	 *

	 * @since    1.0.0

	 * @access   private

	 */

	private function set_locale() {



		$plugin_i18n = new trepi_mobile_head_i18n();



		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );



	}



	/**

	 * Register all of the hooks related to the admin area functionality

	 * of the plugin.

	 *

	 * @since    1.0.0

	 * @access   private

	 */

	private function define_admin_hooks() {



		$plugin_admin = new trepi_mobile_head_Admin( $this->get_trepi_mobile_head(), $this->get_version() );



		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );



	}



	/**

	 * Register all of the hooks related to the public-facing functionality

	 * of the plugin.

	 *

	 * @since    1.0.0

	 * @access   private

	 */

	private function define_public_hooks() {



		$plugin_public = new trepi_mobile_head_Public( $this->get_trepi_mobile_head(), $this->get_version() );



		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );



	}



	/**

	 * Run the loader to execute all of the hooks with WordPress.

	 *

	 * @since    1.0.0

	 */

	public function run() {

		$this->loader->run();

	}



	/**

	 * The name of the plugin used to uniquely identify it within the context of

	 * WordPress and to define internationalization functionality.

	 *

	 * @since     1.0.0

	 * @return    string    The name of the plugin.

	 */

	public function get_trepi_mobile_head() {

		return $this->trepi_mobile_head;

	}



	/**

	 * The reference to the class that orchestrates the hooks with the plugin.

	 *

	 * @since     1.0.0

	 * @return    trepi_mobile_head_Loader    Orchestrates the hooks of the plugin.

	 */

	public function get_loader() {

		return $this->loader;

	}



	/**

	 * Retrieve the version number of the plugin.

	 *

	 * @since     1.0.0

	 * @return    string    The version number of the plugin.

	 */

	public function get_version() {

		return $this->version;

	}



}