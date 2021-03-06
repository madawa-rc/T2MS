<div class="tags index">
	<h2><?php echo __('Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('locality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tags as $tag): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($tag['Locality']['name'], array('controller' => 'localities', 'action' => 'view', $tag['Locality']['id'])); ?>
		</td>
		<td><?php echo h($tag['Tag']['tag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tag['Tag']['tag'],$tag['Tag']['locality_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tag['Tag']['tag'],$tag['Tag']['locality_id']),null, __('Are you sure you want to delete %s ?', $tag['Tag']['tag'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Localities'), array('controller' => 'localities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locality'), array('controller' => 'localities', 'action' => 'add')); ?> </li>
	</ul>
</div>
