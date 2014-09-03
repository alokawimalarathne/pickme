<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('us_id');
		echo $this->Form->input('us_reg_no');
		echo $this->Form->input('us_first_name');
		echo $this->Form->input('us_last_name');
		echo $this->Form->input('us_email');
		echo $this->Form->input('us_password');
		echo $this->Form->input('us_confirmed');
		echo $this->Form->input('us_tp_no_land');
		echo $this->Form->input('us_tp_no_mobile');
		echo $this->Form->input('us_created');
		echo $this->Form->input('us_modified');
		echo $this->Form->input('us_session');
		echo $this->Form->input('us_city');
		echo $this->Form->input('us_first_access');
		echo $this->Form->input('us_last_access');
		echo $this->Form->input('us_url');
		echo $this->Form->input('us_picture');
		echo $this->Form->input('us_discription1');
		echo $this->Form->input('us_discription2');
		echo $this->Form->input('us_ip');
		echo $this->Form->input('us_deleted');
		echo $this->Form->input('us_policy_agreed');
		echo $this->Form->input('us_visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.us_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.us_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
