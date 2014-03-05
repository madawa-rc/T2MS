<div class="trips index">
	<h2><?php echo __('Trips'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('time'); ?></th>
			<th><?php echo $this->Paginator->sort('fare'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('startLocation'); ?></th>
			<th><?php echo $this->Paginator->sort('endLocation'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicleID'); ?></th>
			<th><?php echo $this->Paginator->sort('customerID'); ?></th>
                        <th><?php echo $this->Paginator->sort('customer_name'); ?></th>
                        <th><?php echo $this->Paginator->sort('customer_phone'); ?></th>
                        <th><?php echo $this->Paginator->sort('customer_MaxFare'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trips as $trip): ?>
	<tr>
		<td><?php echo h($trip['Trip']['id']); ?>&nbsp;</td>
		<td><?php echo h($trip['Trip']['time']); ?>&nbsp;</td>
		<td><?php echo h($trip['Trip']['fare']); ?>&nbsp;</td>
		<td><?php echo h($trip['Trip']['status']); ?>&nbsp;</td>
		<td><?php echo h($trip['Trip']['startLocation']); ?>&nbsp;</td>
		<td><?php echo h($trip['Trip']['endLocation']); ?>&nbsp;</td>
		<td><?php echo h($trip['Trip']['vehicleID']); ?>&nbsp;</td>
		<td><?php echo h($trip['Trip']['customerID']); ?>&nbsp;</td>
                <td><?php echo h($trip['Customer']['name']); ?>&nbsp;</td>
                <td><?php echo h($trip['Customer']['phone']); ?>&nbsp;</td>
                <td><?php echo h($trip['Customer']['maxFare']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trip['Trip']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trip['Trip']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trip['Trip']['id']), null, __('Are you sure you want to delete # %s?', $trip['Trip']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Trip'), array('action' => 'add')); ?></li>
	</ul>
</div>
