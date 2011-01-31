<?php
/* Photos Test cases generated on: 2011-01-25 20:37:29 : 1295995049*/
App::import('Controller', 'CakeGallery.Photos');

class TestPhotosController extends PhotosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PhotosControllerTestCase extends CakeTestCase {
	var $fixtures = array('plugin.cake_gallery.album', 'plugin.cake_gallery.photo');

	function startTest() {
		$this->Photos =& new TestPhotosController();
		$this->Photos->constructClasses();
	}

	function endTest() {
		unset($this->Photos);
		ClassRegistry::flush();
	}

}
?>