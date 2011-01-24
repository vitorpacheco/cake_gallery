<div class="actions">
	<h3><?php echo __d('cake_gallery', 'Admin Menu', true);?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('cake_gallery', 'List albums', true), array('plugin' => 'cake_gallery', 'controller' => 'albums', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__d('cake_gallery', 'New album', true), array('plugin' => 'cake_gallery', 'controller' => 'albums', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__d('cake_gallery', 'View albums', true), array('admin' => false, 'plugin' => 'cake_gallery', 'controller' => 'albums', 'action' => 'index')); ?></li>
	</ul>
</div>