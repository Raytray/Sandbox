<div class="netbadges view">
<h2><?php echo __('Netbadge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($netbadge['Netbadge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($netbadge['User']['id'], array('controller' => 'users', 'action' => 'view', $netbadge['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ipaddr'); ?></dt>
		<dd>
			<?php echo h($netbadge['Netbadge']['ipaddr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($netbadge['Netbadge']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid'); ?></dt>
		<dd>
			<?php echo h($netbadge['Netbadge']['valid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($netbadge['Netbadge']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($netbadge['Netbadge']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Netbadge'), array('action' => 'edit', $netbadge['Netbadge']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Netbadge'), array('action' => 'delete', $netbadge['Netbadge']['id']), null, __('Are you sure you want to delete # %s?', $netbadge['Netbadge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Netbadges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Netbadge'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
