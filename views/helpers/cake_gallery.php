<?php
/**
 * CakeGallery Helper
 *
 * @category Helper
 * @package CakeGallery
 * @version 1.0
 * @author Edinei L. Cipriani <phpedinei@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link http://www.edineicipriani.com.br
 */
class CakeGalleryHelper extends AppHelper {

	public $View = false;
	public $helpers = array('Html');

	public function __construct() {
		parent::__construct();
		$this->View = ClassRegistry::getObject('view');
	}

	public function beforeRender() {
			$this->Html->script('/cake_gallery/js/galleria', false);
			$this->Html->scriptBlock('Galleria.loadTheme("'.$this->Html->url('/cake_gallery/js/themes/classic/galleria.classic.js').'");', array('inline' => false));
	}
}