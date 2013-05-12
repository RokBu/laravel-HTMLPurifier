# [HTML Purifier](http://htmlpurifier.org/) Laravel Bundle

Wrapper for HTML Purifier with the beauty of Laravel.

## Installation

Install using the Artisan CLI:

	php artisan bundle:install sanitize

then edit **application/bundles.php** to autoload messages:

```php
<?php

return array(

	'sanitize' => array(
		'auto' => true
	),
	
);

```
	
You can implement required functions of HTML Purifier in sanitize.php.

## Example

### Purify text

```php
<?php

$bad_input = 'Hello!<script>alert("Malicious popup!! Your coding skills suck!")</script>';
$clean_output = Sanitize::purify($bad_input);
echo $clean_output;
// Hello!

```

## Note

I didn't have to change any permissions, but here is a section from the HTMLPurifier documentation if you run into this issue.

From HTML purifier documentation:

5. Caching

HTML Purifier generates some cache files (generally one or two) to speed up
its execution. For maximum performance, make sure that
library/HTMLPurifier/DefinitionCache/Serializer is writeable by the webserver.

If you are in the library/ folder of HTML Purifier, you can set the
appropriate permissions using:

    chmod -R 0755 HTMLPurifier/DefinitionCache/Serializer

## HTML Purifier, by Chris Corbyn

HTML Purifier is a standards-compliant HTML filter library written in PHP. HTML Purifier will not only remove all malicious code (better known as XSS) with a thoroughly audited, secure yet permissive whitelist, it will also make sure your documents are standards compliant, something only achievable with a comprehensive knowledge of W3C's specifications. 
It is released under the LGPL license.

- Homepage:      http://htmlpurifier.org/
- Documentation: http://htmlpurifier.org/docs

For full details on usage, see the documentation.