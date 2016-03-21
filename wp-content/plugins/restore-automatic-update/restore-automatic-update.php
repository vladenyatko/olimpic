<?php
/*
Plugin Name: Restore Automatic Update (ru_RU)
Plugin URI: http://ru.forums.wordpress.org/topic/7292
Description: Allows you to update any outdated Russian WordPress package to the latest release from ru.wordpress.org.
Author: Sergey Biryukov
Author URI: http://ru.wordpress.org/
Version: 0.5
*/ 

class Restore_Automatic_Update {

	function __construct() {
		add_filter( 'option_update_core',         array( $this, 'welcome_back_to_wporg' ), 11 );
		add_filter( 'transient_update_core',      array( $this, 'welcome_back_to_wporg' ), 11 );
		add_filter( 'site_transient_update_core', array( $this, 'welcome_back_to_wporg' ), 11 );

		add_filter( 'pre_http_request',           array( $this, 'reinstate_api_server' ), 10, 3 );
	}

	function welcome_back_to_wporg( $options ) {
		if ( ! isset( $options->updates ) || ! is_array( $options->updates ) ) {
			return $options;
		}

		foreach ( $options->updates as $key => $value ) {
			// WordPress 3.1 and below
			if ( ! empty( $value->url ) ) {
				$value->url = ( false === strpos( $value->url, 'wordpress.org' ) ) ? 'http://ru.wordpress.org/' : $value->url;
			}
			if ( ! empty( $value->package ) ) {
				$value->package = preg_replace( '#//.+/(wordpress-.+-ru_RU\.zip)+?#', '//ru.wordpress.org/$1', $value->package );
			}

			// WordPress 3.2+
			if ( ! empty( $value->download ) ) {
				$value->download = preg_replace( '#//.+/(wordpress-.+-ru_RU\.zip)+?#', '//ru.wordpress.org/$1', $value->download );
			}
			if ( ! empty( $value->packages ) && ! empty( $value->packages->full ) ) {
				$value->packages->full = preg_replace( '#//.+/(wordpress-.+-ru_RU\.zip)+?#', '//ru.wordpress.org/$1', $value->packages->full );
			}

			// WordPress 3.7+
			if ( ! empty( $value->download ) ) {
				$value->download = preg_replace( '#//.+/(ru_RU/wordpress-.+\.zip)+?#', '//downloads.wordpress.org/release/$1', $value->download );
			}
			if ( ! empty( $value->packages ) && ! empty( $value->packages->full ) ) {
				$value->packages->full = preg_replace( '#//.+/(ru_RU/wordpress-.+\.zip)+?#', '//downloads.wordpress.org/release/$1', $value->packages->full );
			}

			$options->updates[ $key ] = $value;
		}

		$options->last_checked = time() - 60;

		return $options;
	}

	function reinstate_api_server( $response = false, $args, $url ) {
		if ( false === strpos( $url, 'mywordpress.ru' ) ) {
			return $response;
		}

		$mywordpress_api = array(
			'//mywordpress.ru/api/update.php',
			'//mywordpress.ru/api/update15.php',
			'//mywordpress.ru/api/update16.php',
			'//mywordpress.ru/api/update17.php',
			'//mywordpress.ru/api/checksums10.php',
		);

		$original_api = array(
			'//api.wordpress.org/core/version-check/1.3/',
			'//api.wordpress.org/core/version-check/1.5/',
			'//api.wordpress.org/core/version-check/1.6/',
			'//api.wordpress.org/core/version-check/1.7/',
			'//api.wordpress.org/core/checksums/1.0/',
		);

		$url = str_replace( $mywordpress_api, $original_api, $url );

		remove_filter( 'pre_http_request', array( $this, __FUNCTION__ ), 10, 3 );
		$response = wp_remote_get( $url, $args );

		return $response;
	}

}

new Restore_Automatic_Update;
?>