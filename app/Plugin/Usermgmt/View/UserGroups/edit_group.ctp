<?php

?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Edit Group'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="addgroup">
				<?php echo $this->Form->create('UserGroup'); ?>
				<?php echo $this->Form->hidden('id')?>
				<div>
					<div class="umstyle3"><?php echo __('Group Name');?><font color='red'>*</font></div>
					<div class="umstyle4" ><?php echo $this->Form->input("name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">for ex. Business User</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo __('Alias Group Name');?><font color='red'>*</font></div>
					<div class="umstyle4" ><?php echo $this->Form->input("alias_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">for ex. Business_User (Must not contain space) (Recomond: do not edit)</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo __('Allow Registration');?></div>
					<div class="umstyle4"><?php echo $this->Form->input("allowRegistration" ,array("type"=>"checkbox",'label' => false))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"></div>
					<div class="umstyle4"><?php echo $this->Form->Submit(__('Update Group'));?></div>
					<div style="clear:both"></div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserUserGroupId").focus();
</script>