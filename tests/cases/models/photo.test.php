<?php
App::import('Model', 'CakeGallery.Photo');

class PhotoTestCase extends CakeTestCase {
	var $fixtures = array('plugin.cake_gallery.album', 'plugin.cake_gallery.photo');
	var $Photo = null;

	function startTest() {
		$this->Photo =& ClassRegistry::init('CakeGallery.Photo');
		$this->Photo->Album =& ClassRegistry::init('CakeGallery.Album');
		$this->Photo->useDbConfig = 'test_suite';
	}

	function testBeforeDelete() {
		$this->Photo->id = 1;
		$this->assertTrue($this->Photo->beforeDelete());

	}

	function testBeforeSave() {

	}

	function endTest() {
		unset($this->Photo);
		ClassRegistry::flush();
	}

}