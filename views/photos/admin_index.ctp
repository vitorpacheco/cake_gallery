<div class="links index">
	<h2><?php __d('cake_gallery','Photos'); ?></h2>
	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('Add new pictures', true), array('action'=>'add', 'gallery' => $gallery)); ?></li>
		</ul>
	</div>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th>&nbsp;</th>
			<th>__('Description', true),</th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($slike as $attachment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $attachment['GalleryPicture']['id']; ?>&nbsp;</td>
			<td><?php echo $this->Html->image($attachment['GalleryPicture']['path_thumb']); ?>&nbsp;</td>
			<td><?php echo $attachment['GalleryPicture']['opis']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'gallery_pictures', 'action' => 'edit', $attachment['GalleryPicture']['id'], 'gallery' => $gallery));?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'gallery_pictures', 'action' => 'delete', $attachment['GalleryPicture']['id'], 'gallery' => $gallery), null, __('Are you sure you want to delete?', true));?>
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

