<?php

add_action( 'init', 'winery_register_slide' );

function winery_register_slide() {
	$labels = array(
		"name" => __( 'Slides', 'winery' ),
		"singular_name" => __( 'Slide', 'winery' ),
		"menu_name" => __( 'Slides', 'winery' ),
		"all_items" => __( 'Todas las slides', 'winery' ),
		"add_new" => __( 'Nueva slide', 'winery' ),
		"add_new_item" => __( 'Añadir nueva slide', 'winery' ),
		"edit_item" => __( 'Editar slide', 'winery' ),
		);

	$args = array(
		"label" => __( 'Slides', 'winery' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
        "exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "slide", "with_front" => true ),
		"query_var" => true,
		
		"supports" => array( "title" ),					);
	register_post_type( "slide", $args );

}

	
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_contenido',
		'title' => 'Contenido',
		'fields' => array (
			array (
				'key' => 'field_5823162aa53cf',
				'label' => 'Descripción',
				'name' => 'slide_description',
				'type' => 'text',
				'instructions' => 'Escriba aquí la descripción que va debajo del título',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_582316caa53d0',
				'label' => 'URL de la imagen',
				'name' => 'url_de_la_imagen',
				'type' => 'text',
				'instructions' => 'Imagen de fondo de la slide',
				'default_value' => '',
				'placeholder' => 'http://placehold.it/1500x1000',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58231749a53d1',
				'label' => 'URL del video',
				'name' => 'url_del_video',
				'type' => 'text',
				'instructions' => 'Video de fondo de la slide, en el caso de que no se especifique se mostrará la imagen.',
				'default_value' => '',
				'placeholder' => 'https://s3-us-west-2.amazonaws.com/coverr/mp4/On-the-vine.mp4',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58231800a53d2',
				'label' => 'Texto del botón',
				'name' => 'texto_del_boton',
				'type' => 'text',
				'instructions' => 'Texto que se mostrará en el botón',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5823182ea53d3',
				'label' => 'URL del botón',
				'name' => 'url_del_boton',
				'type' => 'text',
				'instructions' => 'URL del botón.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'http://www.google.es',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_582318a2a53d4',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'slide',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}


?>