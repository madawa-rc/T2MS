<div class="tags form">
<?php echo $this->Form->create('Tag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tag'); ?></legend>
	<?php

		echo $this->Form->input('locality_id');
		echo $this->Form->input('tag');
        echo json_encode($this->request->data);

      //  echo $this->Form->input('tagOld',array('hidden'=>true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tag.tag'),$this->Form->value('Tag.locality_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tag.tag'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Localities'), array('controller' => 'localities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locality'), array('controller' => 'localities', 'action' => 'add')); ?> </li>
	</ul>
</div>
