<?php
	  
    // theme support
    function winery_theme_support(){
		
        // logo principal
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 260,
            'flex-height' => true,
            'flex-width'  => true
        ));
        
		add_theme_support( 'post-thumbnails' );
        
        // mejoramos integración BS navbar -> WP menu 
        require_once( __DIR__ .'/inc/wp_bootstrap_navwalker.php');
        

        // menús del tema 
		register_nav_menus(array(
			'primary' 	=> __('Menú principal', 'winery')
		));
	}

	add_action('after_setup_theme', 'winery_theme_support');


    // añadimos elemento del menú que abre el modal de la derecha  
    function winery_nav_menu_add_li( $items, $args ) {

        if( $args->theme_location == 'primary')  {

            $items .=  '<li><a href="#" class="toggle-side-menu hidden-xs hidden-sm"><span class="tool-nav fa fa-ellipsis-v"></span></a></div> </li>';
 
        }
        return $items;
    }

    add_filter('wp_nav_menu_items','winery_nav_menu_add_li', 10, 2);

    
    // custom post types
    require_once( __DIR__ . '/inc/advanced-custom-fields/acf.php'); // ACF
    define( 'ACF_LITE', true ); // oculta ACF
    require_once( __DIR__ . '/inc/slides.php');   
 
    // customizer // permitirmos añadir el logo para disposivos móviles
    function winery_customize_register( $wp_customize ) {
        $wp_customize->add_setting( 'mobile_logo' ); // guardamos en BD
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mobile_logo', array(
            'label'    => __( 'Mobile Logo', 'winery' ),
            'section'  => 'title_tagline',
            'settings' => 'mobile_logo',
        ) ) );
    }

    add_action( 'customize_register', 'winery_customize_register' );
   

?>