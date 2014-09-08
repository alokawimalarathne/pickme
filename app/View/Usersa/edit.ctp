<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('us_id', array('label'=>'Reg Number', 'type'=>'hidden'));
                echo $this->Form->input('us_reg_no', array('label'=>'Reg Number'));
		echo $this->Form->input('us_first_name',array('label'=>'First Name'));
		echo $this->Form->input('us_last_name',array('label'=>'Last Name'));
		echo $this->Form->input('us_email',array('label'=>'Email'));
		//echo $this->Form->input('us_password', array('type'=>'password'));
		
		echo $this->Form->input('us_tp_no_land',array('label'=>'Land Phone'));
		echo $this->Form->input('us_tp_no_mobile',array('label'=>'Mobile'));
		//echo $this->Form->input('us_created');
		//echo $this->Form->input('us_modified');
		//echo $this->Form->input('us_session');
		echo $this->Form->input('us_city',array('label'=>'City'));
		//echo $this->Form->input('us_first_access');
		//echo $this->Form->input('us_last_access');
		echo $this->Form->input('us_url',array('label'=>'Website'));
		//echo $this->Form->input('us_picture');
		echo $this->Form->input('us_discription1',array('label'=>'Description'));
		//echo $this->Form->input('us_discription2');
		//echo $this->Form->input('us_ip');
		//echo $this->Form->input('us_deleted');
		//echo $this->Form->input('us_policy_agreed',array('label'=>'I agree to the PickMe Terms and Privacy.'));
		//echo $this->Form->input('us_visible');
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
