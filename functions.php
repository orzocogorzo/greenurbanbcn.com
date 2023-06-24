<?php

/**
 * Green Urban Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greenurban
 */

add_action('wp_enqueue_scripts', 'tewntytwentythree_parent_theme_enqueue_styles');

/**
 * Enqueue scripts and styles.
 */
function tewntytwentythree_parent_theme_enqueue_styles()
{
	wp_enqueue_style('tewntytwentythree-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style(
		'greenurban-style',
		get_stylesheet_directory_uri() . '/style.css',
		['tewntytwentythree-style']
	);
}

add_action('wp_enqueue_scripts', 'gu_enqueue_scripts');
function gu_enqueue_scripts($hook)
{
	wp_enqueue_script(
		'contact-form',
		get_theme_file_uri() . '/js/contact-form.js',
		array(),
		'0.1.3',
		true
	);

	$contact_form_nonce = wp_create_nonce('contact_form');
	wp_localize_script(
		'contact-form',
		'ajaxContactForm',
		array(
			'ajaxURL' => admin_url('admin-ajax.php'),
			'nonce' => $contact_form_nonce,
		)
	);
}

add_action("wp_ajax_contact_form", "gu_ajax_contact_form");
function gu_ajax_contact_form()
{
	check_ajax_referer('contact_form');
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$success = wp_mail(
		"info@greenurbanbcn.com",
		"Formulario de contacto web",
		"Nombre: " . $name . PHP_EOL
			. "Contacto: " . $email . PHP_EOL
			. "Mensaje: " . PHP_EOL . $message . PHP_EOL
	);

	wp_send_json(["success" => $success]);
}
