<?php
/* Photo Test cases generated on: 2011-01-23 02:14:47 : 1295756087*/
App::import('Model', 'CakeGallery.Photo');

class PhotoTestCase extends CakeTestCase {
	var $fixtures = array('plugin.cake_gallery.album', 'plugin.cake_gallery.photo');
	var $Photo = null;
	
	function startTest() {
		$this->Photo =& ClassRegistry::init('CakeGallery.Photo');
	}
	
	function testAddAlbum() {
		debug($this->Photo->find('all'));
	}
	
	function endTest() {
		unset($this->Photo);
		ClassRegistry::flush();
	}

}