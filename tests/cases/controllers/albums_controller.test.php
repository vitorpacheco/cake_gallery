<?php
/* Albums Test cases generated on: 2011-01-25 20:37:48 : 1295995068*/
App::import('Controller', 'CakeGallery.Albums');

class TestAlbumsController extends AlbumsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AlbumsControllerTestCase extends CakeTestCase {
	var $fixtures = array('plugin.cake_gallery.album', 'plugin.cake_gallery.photo');

	function startTest() {
		$this->Albums =& new TestAlbumsController();
		$this->Albums->constructClasses();
	}

	function endTest() {
		unset($this->Albums);
		ClassRegistry::flush();
	}

}
?>