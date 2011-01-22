<a href="#"><?php __d('cake_gallery','Gallery'); ?></a>
<ul>
	<li><?php echo $this->Html->link(__d('cake_gallery','List albums', true), array('plugin' => 'cake_gallery', 'controller' => 'albums', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__d('cake_gallery','New album', true), array('plugin' => 'cake_gallery', 'controller' => 'albums', 'action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(__d('cake_gallery','Gallery settings', true), array('cake_gallery' => '', 'controller' => 'settings', 'action' => 'prefix', 'Gallery')); ?></li>
</ul>

