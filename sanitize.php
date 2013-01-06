<?php

// HTMLPurifier one include file version 4.2.2
require_once 'HTMLPurifier.standalone.php';

/**
 * 
 * @package Sanitize
 * @version 1.0
 * @author Rok B (wrapper for HTML Purifier)
 * @example Santize::purify($bad_code)
 * @license LGPL
 */
class Sanitize {

	/**
	 * Add extra HTMLPurifier methods
	 */

	/**
	 * Returns HTMLPurifier instance with default factory build
	 * @return HTMLPurifier
	 */
	public static function getInstance() {
		$config = HTMLPurifier_Config::createDefault();
		return new HTMLPurifier($config);
	}

	/**
	 * Sanitize string input
	 * @param string $dirty_html 
	 * @return string
	 */
	public static function purify( $dirty_html )
	{
		$config = HTMLPurifier_Config::createDefault();
		$purifier = new HTMLPurifier($config);
		$clean_html = $purifier->purify($dirty_html);

		return $clean_html;
	}

}