<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    QA_Checklist
 * @subpackage QA_Checklist/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    QA_Checklist
 * @subpackage QA_Checklist/admin
 * @author     Your Name <email@example.com>
 */
class QA_Checklist_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $qa_checklist    The ID of this plugin.
	 */
	private $qa_checklist;

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
	 * @param      string    $qa_checklist       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $qa_checklist, $version ) {

		$this->qa_checklist = $qa_checklist;
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
		 * defined in QA_Checklist_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The QA_Checklist_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->qa_checklist, plugin_dir_url( __FILE__ ) . 'css/qa-checklist-admin.css', array(), $this->version, 'all' );

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
		 * defined in QA_Checklist_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The QA_Checklist_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->qa_checklist, plugin_dir_url( __FILE__ ) . 'js/qa-checklist-admin.js', array( 'jquery' ), $this->version, false );

	}

}
