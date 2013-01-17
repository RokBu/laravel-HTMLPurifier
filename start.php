<?php

Laravel\IoC::singleton('HTMLPurifier', function()
{
	require_once 'HTMLPurifier.standalone.php';
	$config = HTMLPurifier_Config::createDefault();
	return new HTMLPurifier($config);
});