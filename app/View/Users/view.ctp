<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Us Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Reg No'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_reg_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Confirmed'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_confirmed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Tp No Land'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_tp_no_land']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Tp No Mobile'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_tp_no_mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Session'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_session']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us City'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us First Access'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_first_access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Last Access'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_last_access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Url'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Picture'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_picture']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Discription1'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_discription1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Discription2'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_discription2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Ip'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Deleted'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Policy Agreed'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_policy_agreed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Us Visible'); ?></dt>
		<dd>
			<?php echo h($user['User']['us_visible']); ?>
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
