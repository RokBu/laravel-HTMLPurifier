# [HTML Purifier](http://htmlpurifier.org/) Laravel Bundle

Wrapper for HTML Purifier with the beauty of Laravel.

## Installation

Installation with Artisan CLI:

	php artisan bundle:install Sanitizer

Manual installation:

Copy files into **bundles/sanitize**

then edit **application/bundles.php** to autoload sanitizer:

	'sanitize' => array('auto' => true),
	
You can implement required functions of HTML Purifier in sanitize.php.

## Example

### Purify text

```php
<?php

$bad_input = 'Hello!<script>alert("Malicious popup!! Your coding skills suck!")</script>';
$clean_output = Sanitize::purify($bad_input);
echo $clean_output; 
// "Hello!"

```

## HTML Purifier

HTML Purifier is a standards-compliant HTML filter library written in PHP. HTML Purifier will not only remove all malicious code (better known as XSS) with a thoroughly audited, secure yet permissive whitelist, it will also make sure your documents are standards compliant, something only achievable with a comprehensive knowledge of W3C's specifications. 
It is released under the LGPL license.

- Homepage:      http://htmlpurifier.org/
- Documentation: http://htmlpurifier.org/docs

For full details on usage, see the documentation.