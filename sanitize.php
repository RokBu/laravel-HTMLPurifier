<?php

// HTMLPurifier one include file version 4.2.2
require_once 'HTMLPurifier.standalone.php';

/**
 * 
 * @package Sanitize
 * @version 1.1
 * @author Rok B (wrapper for HTML Purifier)
 * @example Santize::purify($bad_code)
 * @license LGPL
 */
class Sanitize {

	/**
	 * Singleton
	 */
	static $_instance = null;


	/**
	 * Add extra HTMLPurifier methods
	 */

	/**
	 * Returns HTMLPurifier instance with default factory build
	 * @return HTMLPurifier
	 */
	public static function getInstance() {
		self::checkInstance();

		return self::$_instance;
	}

	/**
	 * Build new instance
	 * @param type $config 
	 * @return
	 */
	public static function setInstance( $config = null ) {

		if ( is_null($config) ) {
			$config = HTMLPurifier_Config::createDefault();
		}

		self::$_instance = new HTMLPurifier($config);
		
	}

	/**
	 * Create new instance if it doesn't allready exists
	 * @param type $config 
	 * @return
	 */
	public static function checkInstance( $config = null ) {
		if ( is_null(self::$_instance) ) {
			self::setInstance($config);
		}
	}

	/**
	 * Sanitize string input
	 * @param string $dirty_html 
	 * @return string
	 */
	public static function purify( $dirty_html )
	{
		self::checkInstance();
		
		$clean_html = self::$_instance->purify($dirty_html);

		return $clean_html;
	}

}