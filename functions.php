<?php
/**
 * Empty Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Empty_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'empty_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function empty_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Empty Theme, use a find and replace
		 * to change 'sporcks' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sporcks', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'sporcks' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'empty_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'empty_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function empty_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'empty_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'empty_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function empty_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sporcks' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sporcks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar( array(
		'name'          => __( 'filtros', 'sporcks' ),
		'id'            => 'tienda-filtros',
		'description'   => __( 'Add widgets here to appear in your tienda-filtros.', 'sporcks' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'empty_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function empty_theme_scripts() {
	wp_enqueue_style( 'sporcks-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'sporcks-style', 'rtl', 'replace' );

	wp_enqueue_script( 'sporcks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'empty_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/register-blocks.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function repeater_get_post_meta( $repeater_key, $post_id, $sub_field_keys ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    // get repeater field
    $repeater = get_post_meta( get_the_ID(), $repeater_key, true );

    $repeater_output = array();

    if( $repeater ) {
        // loop through repeater fields
        for( $i = 0; $i < $repeater; $i++ ) {

            // loop through subfields
            for( $j = 0; $j < $sub_field_keys; $j++ ) {
                $repeater_output[$i][$sub_field_keys[$j]] = get_post_meta( get_the_ID(), $repeat_key . '_' . $i . '_' . $sub_field_keys[$j], true );
            }
        }
    }

    return $repeater_output;
}

function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');

/**
 * Adjust the quantity input values
 */

add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_loop_ajax_add_to_cart', 10, 2 );
function quantity_inputs_for_loop_ajax_add_to_cart( $html, $product ) {
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        // Get the necessary classes
        $class = implode( ' ', array_filter( array(
            'button product-info__button button button--outline',
            'product_type_' . $product->get_type(),
            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
            $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
        ) ) );

        // Embedding the quantity field to Ajax add to cart button
        $html = sprintf( '%s<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
            woocommerce_quantity_input( array(), $product, false ),
            esc_url( $product->add_to_cart_url() ),
            esc_attr( isset( $quantity ) ? $quantity : 1 ),
			
            esc_attr( $product->get_id() ),
            esc_attr( $product->get_sku() ),
            esc_attr( isset( $class ) ? $class : 'button' ),
            esc_html( $product->add_to_cart_text() )
        );
    }
    return $html;
}

add_action( 'wp_footer' , 'archives_quantity_fields_script' );
function archives_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
        jQuery(function($){
            // Update data-quantity
            $(document.body).on('click input', 'input.qty', function() {
                $(this).parent().parent().find('a.ajax_add_to_cart').attr('data-quantity', $(this).val());
                $(".added_to_cart").remove(); // Optional: Removing other previous "view cart" buttons
            }).on('click', '.add_to_cart_button', function(){
                var button = $(this);
                setTimeout(function(){
                    button.parent().find('.quantity > input.qty').val(1); // reset quantity to 1
                }, 1000); // After 1 second

            });
        });
    </script>
    <?php
}