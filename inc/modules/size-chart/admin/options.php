<?php

/**
 * Size Chart Options.
 * 
 * @package Merchant
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Settings
Merchant_Admin_Options::create( array(
	'title'  => esc_html__( 'Settings', 'merchant' ),
	'module' => 'size-chart',
	'fields' => array(

		array(
			'id'    => 'global_size_chart',
			'type'  => 'select_size_chart',
			'title' => esc_html__( 'Global size chart (optional)', 'merchant' ),
			/* Translators: 1. Link open tag 2. Link close tag */
			'desc'  => sprintf( esc_html__( 'Your size charts will appear in this option as you create them. %1$sClick here%2$s to create or modify the available size charts.', 'merchant' ), '<a href="'. esc_url( admin_url( 'edit.php?post_type=merchant_size_chart' ) ) .'">', '</a>' ),
		),

		array(
			'id'      => 'text',
			'type'    => 'text',
			'title'   => esc_html__( 'Label text', 'merchant' ),
			'default' => esc_html__( 'Size Chart', 'merchant' ),
		),

		array(
			'id'      => 'icon',
			'type'    => 'choices',
			'title'   => esc_html__( 'Icon', 'merchant' ),
			'options' => array(
				'icon-size-chart'           => MERCHANT_URI . 'assets/images/icons/size-chart/admin/icon-size-chart.svg',
				'cloth-size-guide-icon'     => MERCHANT_URI . 'assets/images/icons/size-chart/admin/cloth-size-guide-icon.svg',
				'measurement-vertical-icon' => MERCHANT_URI . 'assets/images/icons/size-chart/admin/measurement-vertical-icon.svg',
				'measuring-tape-icon'       => MERCHANT_URI . 'assets/images/icons/size-chart/admin/measuring-tape-icon.svg',
				'pencil-rule'               => MERCHANT_URI . 'assets/images/icons/size-chart/admin/pencil-rule.svg',
				'scale-ruler-icon'          => MERCHANT_URI . 'assets/images/icons/size-chart/admin/scale-ruler-icon.svg',
			),
			'default' => 'icon-size-chart',
		),

		array(
			'id'      => 'icon-size',
			'type'    => 'range',
			'title'   => esc_html__( 'Icon size', 'merchant' ),
			'min'     => 1,
			'max'     => 100,
			'step'    => 1,
			'default' => 24,
			'unit'    => 'px',
		),

		array(
			'id'      => 'title-text-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Title text color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'title-text-color-hover',
			'type'    => 'color',
			'title'   => esc_html__( 'Title text color hover', 'merchant' ),
			'default' => '#757575',
		),

		array(
			'id'    => 'icon-color',
			'type'  => 'color',
			'title' => esc_html__( 'Icon color', 'merchant' ),
		),

		array(
			'id'    => 'icon-color-hover',
			'type'  => 'color',
			'title' => esc_html__( 'Icon color hover', 'merchant' ),
		),

	)
) );

// Design
Merchant_Admin_Options::create( array(
	'title'  => esc_html__( 'Popup Design', 'merchant' ),
	'module' => 'size-chart',
	'fields' => array(

		array(
			'id'      => 'popup-width',
			'type'    => 'range',
			'title'   => esc_html__( 'Popup width', 'merchant' ),
			'min'     => 1,
			'max'     => 2000,
			'step'    => 1,
			'default' => 750,
			'unit'    => 'px',
		),

		array(
			'id'      => 'background-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Background color', 'merchant' ),
			'default' => '#f2f2f2',
		),

		array(
			'id'      => 'close-icon-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Close icon color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'close-icon-color-hover',
			'type'    => 'color',
			'title'   => esc_html__( 'Close icon color hover', 'merchant' ),
			'default' => '#757575',
		),

		array(
			'id'      => 'title-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Title color', 'merchant' ),
			'default' => '#212112',
		),

		array(
			'id'      => 'tabs-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Tabs color', 'merchant' ),
			'default' => '#757575',
		),

		array(
			'id'      => 'tabs-color-active',
			'type'    => 'color',
			'title'   => esc_html__( 'Tabs color active', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'table-headings-background-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Table headings background color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'table-headings-text-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Table headings text color', 'merchant' ),
			'default' => '#ffffff',
		),

		array(
			'id'      => 'table-body-background-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Table body background color', 'merchant' ),
			'default' => '#ffffff',
		),

		array(
			'id'      => 'table-body-text-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Table body text color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'description-text-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Description text Color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'description-link-color',
			'type'    => 'color',
			'title'   => esc_html__( 'Description link color', 'merchant' ),
			'default' => '#212121',
		),

		array(
			'id'      => 'description-link-color-hover',
			'type'    => 'color',
			'title'   => esc_html__( 'Description link color hover', 'merchant' ),
			'default' => '#757575',
		),

	)
) );
