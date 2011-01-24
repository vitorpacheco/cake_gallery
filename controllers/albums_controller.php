<?php
/**
 * Albums Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package CakeGallery
 * @version 1.0
 * @author Edinei L. Cipriani <phpedinei@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link http://www.demoveo.com
 */
class AlbumsController extends CakeGalleryAppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Albums';

	public function admin_index() {
		$this->set('title_for_layout', __d('cake_gallery','Albums', true));
		$this->Album->recursive = 0;
		$this->paginate = array(
			'limit' => Configure::read('CakeGalleryOptions.album_limit_pagination'),
			'order' => 'Album.id ASC'
		);
		$this->set('albums', $this->paginate());
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Album->create();
			$this->data['Album']['slug'] = Inflector::slug($this->data['Album']['title']);
			$this->Album->recursive = -1;
			if ($this->Album->save($this->data)) {
				$this->Session->setFlash(__('Album is saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('cake_gallery','Album could not be saved. Please try again.', true));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid album.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Album->save($this->data)) {
				$this->Session->setFlash(__d('cake_gallery','Album is saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('cake_gallery','Album could not be saved. Please try again.', true));
			}
		}
		$this->data = $this->Album->read(null, $id);
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__d('cake_gallery','Invalid ID for album.', true));
			$this->redirect(array('action' => 'index'));
		} else {
			$ssluga = $this->Album->findById($id);
			$sslug = $ssluga['Album']['slug'];
			$dir  = WWW_ROOT . 'img' . DS . $sslug;
		}
		if ($this->Album->delete($id, true)) {
			$this->Session->setFlash(__d('cake_gallery','Album is deleted, and whole directory with images.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->render(false);
	}

	public function index() {
		$this->set('title_for_layout',__d('cake_gallery',"Albums", true));
		$this->Album->recursive = -1;
		$this->Album->Behaviors->attach('Containable');
		$this->paginate = array(
			'conditions' => array('Album.status' => 1),
			'contain' => array('Photo' => array('limit' => 1)),
			'limit' => Configure::read('CakeGalleryOptions.album_limit_pagination'),
			'order' => 'Album.id ASC'
		);
		$this->set('albums', $this->paginate());
	}

	public function view($slug = null) {
		if (!$slug) {
			$this->Session->setFlash(__d('cake_gallery','Invalid album. Please try again.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Album->Behaviors->attach('Containable');
		$album = $this->Album->find('first', array(
			'conditions' => array('Album.slug' => $slug),
			'contain' => 'Photo'
		));
		if (isset($this->params['requested'])) {
			return $album;
		}
		if (!count($album)) {
			$this->Session->setFlash(__d('cake_gallery','Invalid album. Please try again.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('title_for_layout', __d('cake_gallery','Album', true) . $album['Album']['title']);
		$this->set(compact('album'));
	}

	public function admin_upload($id = null) {
		if (!$id) {
			$this->Session->setFlash(__d('cake_gallery','Invalid album. Please try again.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('title_for_layout',__d('cake_gallery',"Manage your photos in album", true));
		$this->Album->Behaviors->attach('Containable');
		$album = $this->Album->find('first', array('conditions' => array('Album.id' => $id), 'contain' => 'Photo'));
		$this->set('album', $album);
	}

	public function admin_upload_photo($id = null) {
		set_time_limit(240);
		$this->layout = 'ajax';
		$this->render(false);
		Configure::write('debug', 0);
		$this->data['Photo']['album_id'] = $id;
		$this->Album->Photo->create();
		$this->Album->Photo->save($this->data);
		echo json_encode($this->Album->Photo->findById($this->Album->Photo->id));
	}

	public function admin_delete_photo($id = null) {
		$this->layout = 'ajax';
		$this->autoRender = false;
		if (!$id) {
			echo json_encode(array('status' => 0, 'msg' => __d('cake_gallery','Invalid photo. Please try again.', true))); exit();
		}
		if ($this->Album->Photo->delete($id)) {
			echo json_encode(array('status' => 1)); exit();
		} else {
			echo json_encode(array('status' => 0,  'msg' => __d('cake_gallery','Problem to remove photo. Please try again.', true))); exit();
		}
	}
}

