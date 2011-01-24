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

	/**
	 * 
	 * Enter description here ...
	 * @var View
	 */
	public $View = false;
	
	public function __construct() {
		parent::__construct();
		$this->View = ClassRegistry::getObject('view');
	}
	
	public function beforeRender() {
			echo $this->View->element('gallery_include_js', array('plugin' => 'cake_gallery'));
	}
	
	public function loadGallery($slug) {
		echo $this->View->element('gallery_album', array('plugin' => 'cake_gallery', 'slug' => $slug));
	}
	
	public function replaceForAlbum($subject){
		preg_match('/\[CakeGallery:(.*)\]/', $subject[0], $matches);
		return $this->View->element('gallery_album', array('plugin' => 'cake_gallery', 'slug' => $matches[1], 'cache' => array('key' => $matches[1], 'time' => '5 mins')));
	}
}

