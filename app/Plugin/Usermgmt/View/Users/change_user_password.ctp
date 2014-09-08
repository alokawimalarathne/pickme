<?php

?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Change Password for '); echo h($name); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="login">
				<div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('User'); ?>
					<div>
						<div class="umstyle3"><?php echo __('Password');?></div>
						<div class="umstyle4"><?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Confirm Password');?></div>
						<div class="umstyle4"><?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"></div>
						<div class="umstyle4"><?php echo $this->Form->Submit(__('Change'));?></div>
						<div style="clear:both"></div>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserPassword").focus();
</script>