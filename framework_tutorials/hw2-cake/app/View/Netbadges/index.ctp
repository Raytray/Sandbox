<div class="netbadges index">
	<h2><?php echo __('Netbadges'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ipaddr'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('valid'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($netbadges as $netbadge): ?>
	<tr>
		<td><?php echo h($netbadge['Netbadge']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($netbadge['User']['id'], array('controller' => 'users', 'action' => 'view', $netbadge['User']['id'])); ?>
		</td>
		<td><?php echo h($netbadge['Netbadge']['ipaddr']); ?>&nbsp;</td>
		<td><?php echo h($netbadge['Netbadge']['value']); ?>&nbsp;</td>
		<td><?php echo h($netbadge['Netbadge']['valid']); ?>&nbsp;</td>
		<td><?php echo h($netbadge['Netbadge']['created']); ?>&nbsp;</td>
		<td><?php echo h($netbadge['Netbadge']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $netbadge['Netbadge']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $netbadge['Netbadge']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $netbadge['Netbadge']['id']), null, __('Are you sure you want to delete # %s?', $netbadge['Netbadge']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Netbadge'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
	<p>To login via Netbadge, click <a href="/~rt2ck/netbadge">here</a>.</p>
</div>
