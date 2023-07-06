<?php
/**
 * Merchant - Quick View
 */

/**
 * Settings
 */
Merchant_Admin_Options::create( array(
	'title'  => esc_html__( 'Settings', 'merchant' ),
	'module' => 'quick-view',
	'fields' => array(

		array(
			'id'      => 'button_type',
			'type'    => 'select',
			'title'   => esc_html__( 'Button Type', 'merchant' ),
			'options' => array(
				'text'      => esc_html__( 'Text', 'merchant' ),
				'icon'      => esc_html__( 'Icon', 'merchant' ),
				'icon-text' => esc_html__( 'Icon + Text', 'merchant' ),
			),
			'default' => 'text',
		),

		array(
			'id'        => 'button_text',
			'type'      => 'text',
			'title'     => esc_html__( 'Button Text', 'merchant' ),
			'default'   => esc_html__( 'Quick View', 'merchant' ),
			'condition' => array( 'button_type', 'any', 'text|icon-text' ),
		),

		array(
			'id'        => 'button_icon',
			'type'      => 'choices',
			'title'     => esc_html__( 'Select an icon', 'merchant' ),
			'options'   => array(
				'eye'     => '%s/eye.svg',
				'cart'    => '%s/cart.svg',
			),
			'default'   => 'eye',
			'condition' => array( 'button_type', 'any', 'icon|icon-text' ),
		),

		array(
			'id'        => 'button_position',
			'type'      => 'select',
			'title'     => esc_html__( 'Button Position', 'merchant' ),
			'options'   => array(
				'before'  => esc_html__( 'Before - Add to Cart', 'merchant' ),
				'after'   => esc_html__( 'After - Add to Cart', 'merchant' ),
				'overlay' => esc_html__( 'Overlay', 'merchant' ),
			),
			'default'   => 'after',
		),

		array(
			'id'        => 'icon-color',
			'type'      => 'color',
			'title'     => esc_html__( 'Icon Color', 'merchant' ),
			'default'   => '#ffffff',
			'condition' => array( 'button_type', 'any', 'icon|icon-text' ),
		),

		array(
			'id'        => 'icon-hover-color',
			'type'      => 'color',
			'title'     => esc_html__( 'Icon Color Hover', 'merchant' ),
			'default'   => '#ffffff',
			'condition' => array( 'button_type', 'any', 'icon|icon-text' ),
		),

		array(
			'id'        => 'text-color',
			'type'      => 'color',
			'title'     => esc_html__( 'Button Text Color', 'merchant' ),
			'default'   => '#ffffff',
			'condition' => array( 'button_type', 'any', 'text|icon-text' ),
		),

		array(
			'id'        => 'text-hover-color',
			'type'      => 'color',
			'title'     => esc_html__( 'Button Text Color Hover', 'merchant' ),
			'default'   => '#ffffff',
			'condition' => array( 'button_type', 'any', 'text|icon-text' ),
		),

		array(
			'id'    => 'border-color',
			'type'  => 'color',
			'title' => esc_html__( 'Button Border Color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'    => 'border-hover-color',
			'type'  => 'color',
			'title' => esc_html__( 'Button Border Color Hover', 'merchant' ),
			'default' => '#414141',
		),

		array(
			'id'    => 'background-color',
			'type'  => 'color',
			'title' => esc_html__( 'Button Background Color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'    => 'background-hover-color',
			'type'  => 'color',
			'title' => esc_html__( 'Button Background Color Hover', 'merchant' ),
			'default' => '#414141',
		),

	),
) );


/**
 * Modal
 */
Merchant_Admin_Options::create( array(
	'title'  => esc_html__( 'Modal', 'merchant' ),
	'module' => 'quick-view',
	'fields' => array(

		array(
	  'id'      => 'modal_width',
			'type'    => 'range',
			'title'   => esc_html__( 'Modal Width', 'merchant' ),
			'min'     => 1,
			'max'     => 2000,
			'step'    => 1,
			'default' => 1000,
			'unit'    => 'px',
		),

		array(
	  'id'      => 'modal_height',
			'type'    => 'range',
			'title'   => esc_html__( 'Modal Height', 'merchant' ),
			'min'     => 1,
			'max'     => 2000,
			'step'    => 1,
			'default' => 500,
			'unit'    => 'px',
		),

		array(
			'id'      => 'place_product_image',
			'type'    => 'radio',
			'title'   => esc_html__( 'Place Product Image', 'merchant' ),
			'options' => array(
				'thumbs-at-left'   => esc_html__( 'Thumbs at left', 'merchant' ),
				'thumbs-at-right'  => esc_html__( 'Thumbs at right', 'merchant' ),
				'thumbs-at-bottom' => esc_html__( 'Thumbs at bottom', 'merchant' ),
			),
			'default' => 'thumbs-at-left',
		),

		array(
			'id'      => 'zoom_effect',
			'type'    => 'switcher',
			'title'   => esc_html__( 'Zoom Effect on Image', 'merchant' ),
			'default' => 1,
		),

		array(
			'id'       => 'place_product_description',
			'type'     => 'radio',
			'title'    => esc_html__( 'Place Product Description', 'merchant' ),
			'options'  => array(
				'top'    => esc_html__( 'Top', 'merchant' ),
				'bottom' => esc_html__( 'Bottom', 'merchant' ),
			),
			'default'  => 'top',
		),

		array(
			'id'      => 'description_style',
			'type'    => 'radio',
			'title'   => esc_html__( 'Description Style', 'merchant' ),
			'options' => array(
				'full'  => esc_html__( 'Full Description', 'merchant' ),
				'short' => esc_html__( 'Short Description', 'merchant' ),
			),
			'default' => 'full',
		),

		array(
			'id'      => 'show_quantity',
			'type'    => 'switcher',
			'title'   => esc_html__( 'Show Quantity Selector', 'merchant' ),
			'default' => 1,
		),

		array(
			'id'      => 'sale-price-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Sale Price Color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'regular-price-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Regular Price Color', 'merchant' ),
			'default' => '#999999',
		),

	),
) );
