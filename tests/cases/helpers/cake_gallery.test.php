<?php
/* CakeGallery Test cases generated on: 2011-01-25 20:39:04 : 1295995144*/
App::import('Helper', 'CakeGallery.CakeGallery');

class CakeGalleryHelperTestCase extends CakeTestCase {
	function startTest() {
		$this->CakeGallery =& new CakeGalleryHelper();
	}

	function endTest() {
		unset($this->CakeGallery);
		ClassRegistry::flush();
	}

}
?>