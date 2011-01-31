<?php
App::import('Core', array('View', 'Helper'));
App::import('Helper', array('Html', 'CakeGallery.CakeGallery'));

class CakeGalleryHelperTestCase extends CakeTestCase {
	var $CakeGallery = null;

	function startTest() {
		$null = null;
		$this->View = new View($null);
		ClassRegistry::removeObject('view');
		ClassRegistry::addObject('view', $this->View);
		$this->CakeGallery =& new CakeGalleryHelper();
		$this->CakeGallery->Html = new HtmlHelper();
	}

	function testBeforeRender() {
		$this->CakeGallery->beforeRender();
		$this->assertEqual($this->View->__scripts[0], '<script type="text/javascript" src="/cake_gallery/js/galleria.js"></script>');
		$this->assertEqual($this->View->__scripts[1], '<script type="text/javascript">
//<![CDATA[
Galleria.loadTheme("/cake_gallery/js/themes/classic/galleria.classic.js");
//]]>
</script>');
	}

	function endTest() {
		unset($this->CakeGallery, $this->View);
		ClassRegistry::flush();
	}

}