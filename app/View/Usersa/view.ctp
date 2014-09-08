<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		
		
		<dt><?php echo __('Reg Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_reg_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_email']); ?>
			&nbsp;
		</dd>
		
		
		<dt><?php echo __('Confirmed'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_confirmed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_tp_no_land']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_tp_no_mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Joined Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_created']); ?>
			&nbsp;
		</dd>
		
		
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Access'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_first_access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Access'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_last_access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web Site'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_url']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Discription'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_discription1']); ?>
			&nbsp;
		</dd>
		
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['us_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['us_id']), array(), __('Are you sure you want to delete # %s?', $user['User']['us_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
