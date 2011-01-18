<div class="albums index">
	<h2><?php __d('cake_gallery','Manage Albums'); ?></h2>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__d('cake_gallery','New album', true), array('action'=>'add')); ?></li>
		</ul>
	</div>

	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php __d('cake_gallery','Order number', true);?></th>
			<th><?php __d('cake_gallery','Title', true);?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($albums as $album):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $album['Album']['id']; ?>&nbsp;</td>
			<td><?php echo $album['Album']['description']; ?>&nbsp;</td>
			<td><?php echo $album['Album']['status']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__d('cake_gallery','Photos in album', true), array('controller' => 'albums', 'action' => 'upload', $album['Album']['id']));?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'albums', 'action' => 'edit', $album['Album']['id']));?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'albums', 'action' => 'delete', $album['Album']['id']), null, __('Are you sure you want to delete?', true));?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>

