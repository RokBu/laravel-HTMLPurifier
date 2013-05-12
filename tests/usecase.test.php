<?php

require (dirname(__FILE__)."/../sanitize.php");

class TestExample extends PHPUnit_Framework_TestCase {

    public function testCleanInput()
    {
		$bad_input = 'Hello!<script>alert("Malicious popup!! Your coding skills suck!")</script>';
		$clean_output = Sanitize::purify($bad_input);
		$expected_output = 'Hello!';

        $this->assertTrue($clean_output === $expected_output);
    }

    public function testSingleton() 
    {
        $this->assertInstanceOf('HTMLPurifier', Sanitize::getInstance());
        $this->assertClassHasStaticAttribute('_instance', 'Sanitize');
    }

    public function testSingletonBuildOnlyOnce() {
        
        $instance1 = Sanitize::getInstance();
        $instance2 = Sanitize::getInstance();

        // must be the same instance
        $this->assertTrue($instance1 === $instance2);
    }        

}