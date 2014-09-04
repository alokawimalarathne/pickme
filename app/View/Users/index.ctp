<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			
			<th><?php echo $this->Paginator->sort('us_first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('us_last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('us_email'); ?></th>
			
			<th><?php echo $this->Paginator->sort('us_confirmed'); ?></th>
			
			<th><?php echo $this->Paginator->sort('us_city'); ?></th>
			<th><?php echo $this->Paginator->sort('us_first_access'); ?></th>
			<th><?php echo $this->Paginator->sort('us_last_access'); ?></th>
	
			<th><?php echo $this->Paginator->sort('us_deleted'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
            </thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		
		
		<td><?php echo h($user['User']['us_first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['us_last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['us_email']); ?>&nbsp;</td>
		
		<td><?php echo h($user['User']['us_confirmed']); ?>&nbsp;</td>
		
		<td><?php echo h($user['User']['us_city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['us_first_access']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['us_last_access']); ?>&nbsp;</td>
		
		
		
		<td><?php echo h($user['User']['us_deleted']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['us_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['us_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['us_id']), array(), __('Are you sure you want to delete # %s?', $user['User']['us_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>
