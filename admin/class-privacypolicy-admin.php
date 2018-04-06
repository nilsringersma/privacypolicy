<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/nilsringersma
 * @since      1.0.0
 *
 * @package    Privacypolicy
 * @subpackage Privacypolicy/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Privacypolicy
 * @subpackage Privacypolicy/admin
 * @author     Nils Ringersma <nils@webreact.nl>
 */
class Privacypolicy_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Privacypolicy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Privacypolicy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/privacypolicy-admin.css', array(), $this->version, 'all' );

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
		 * defined in Privacypolicy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Privacypolicy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/privacypolicy-admin.js', array( 'jquery' ), $this->version, false );

	}

    /**
     * Create the WordPress menu page for the Kiyoh settings.
     *
     * @since 1.0.0
     */
    public function privacypolicy_admin_menu() {

        /**
         * This function generates the WordPress menu.
         */
        add_options_page( 'Privacy Policy', 'Privacy Policy', 'manage_options', 'privacypolicy', array( $this, 'fill_privacypolicy_admin_menu' ));

    }

    /**
     * Fill the kiyoh settings page.
     *
     * @since 1.0.0
     */
    public function fill_privacypolicy_admin_menu() {

        require_once( plugin_dir_path( __FILE__ ) . 'partials/privacypolicy-admin-display.php' );

    }

    /**
     * Create the settings for the Kiyoh page.
     *
     * @since 1.0.0
     */
    public function privacypolicy_settings() {

        /**
         * This function registers the settings for the onderhoud settings page.
         */
        register_setting( 'privacypolicy-settings-group', 'bedrijfsnaam' );
        register_setting( 'privacypolicy-settings-group', 'emailadres' );
        register_setting( 'privacypolicy-settings-group', 'domeinnaam' );
        register_setting( 'privacypolicy-settings-group', 'datum_aanmaken' );

        register_setting( 'privacypolicy-settings-group', 'beheerder' );
        register_setting( 'privacypolicy-settings-group', 'beheerder_adres' );
        register_setting( 'privacypolicy-settings-group', 'beheerder_postcode' );
        register_setting( 'privacypolicy-settings-group', 'beheerder_plaats' );
        register_setting( 'privacypolicy-settings-group', 'beheerder_kvk' );

        register_setting( 'privacypolicy-settings-group', 'opslag_naam' );
        register_setting( 'privacypolicy-settings-group', 'opslag_email' );
        register_setting( 'privacypolicy-settings-group', 'opslag_website' );
        register_setting( 'privacypolicy-settings-group', 'opslag_telefoon' );
        register_setting( 'privacypolicy-settings-group', 'opslag_bedrijfsnaam' );
        register_setting( 'privacypolicy-settings-group', 'opslag_adres' );
        register_setting( 'privacypolicy-settings-group', 'opslag_woonplaats' );
        register_setting( 'privacypolicy-settings-group', 'opslag_kvk' );
        register_setting( 'privacypolicy-settings-group', 'opslag_geslacht' );
        register_setting( 'privacypolicy-settings-group', 'opslag_leeftijd' );
        register_setting( 'privacypolicy-settings-group', 'opslag_burgelijkestaat' );
        register_setting( 'privacypolicy-settings-group', 'opslag_ipadres' );
        register_setting( 'privacypolicy-settings-group', 'opslag_gebruikersnaam' );

        register_setting( 'privacypolicy-settings-group', 'reden_contact' );
        register_setting( 'privacypolicy-settings-group', 'reden_retargeting' );
        register_setting( 'privacypolicy-settings-group', 'reden_nieuwsbrief' );
        register_setting( 'privacypolicy-settings-group', 'reden_offerte' );
        register_setting( 'privacypolicy-settings-group', 'reden_boekhouding' );
        register_setting( 'privacypolicy-settings-group', 'reden_statistieken' );

        register_setting( 'privacypolicy-settings-group', 'cookies_advertentiecookies' );
        register_setting( 'privacypolicy-settings-group', 'cookies_trackingcookies' );
        register_setting( 'privacypolicy-settings-group', 'cookies_analytics' );
        register_setting( 'privacypolicy-settings-group', 'cookies_socialmedia' );

    }
}
