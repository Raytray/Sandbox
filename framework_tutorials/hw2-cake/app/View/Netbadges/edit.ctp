<div class="netbadges form">
<?php echo $this->Form->create('Netbadge'); ?>
	<fieldset>
		<legend><?php echo __('Edit Netbadge'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('ipaddr');
		echo $this->Form->input('value');
		echo $this->Form->input('valid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Netbadge.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Netbadge.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Netbadges'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
