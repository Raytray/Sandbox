<div class="logs form">
<?php echo $this->Form->create('Log'); ?>
	<fieldset>
		<legend><?php echo __('Add Log'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('controller');
		echo $this->Form->input('function');
		echo $this->Form->input('details');
		echo $this->Form->input('theid');
		echo $this->Form->input('url');
		echo $this->Form->input('data');
		echo $this->Form->input('ipaddr');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Logs'), array('action' => 'index')); ?></li>
	</ul>
</div>
