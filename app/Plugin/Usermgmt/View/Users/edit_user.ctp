<?php
if(isset($this->params['url']['utype'])){
$utype = $this->params['url']['utype']; //echo '<pre>';print_r($this);echo '</pre>';
}else{
 $utype = '';   
}
?>
<div class="umtop">
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php 
              
                    echo __('Update your profile ');  
              
                
                ?></span>
               
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home", true), "/") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
                    <?php echo $this->Form->create('User'); ?>
                    <?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
                    <?php if ($this->UserAuth->getGroupName()=='Admin') { ?>
                        <div>
                            <div class="umstyle3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                            <div style="clear:both"></div>
                        </div>
                    <?php }elseif($utype==='student'){ ?>
                        <div>
                            <div class="umstyle3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "umstyle5" , 'disabled'=>'disabled', 'value'=>'3')) ?></div>
                            <input type="hidden" value="3" name="user_group_id"/>  
                            <div style="clear:both"></div>
                        </div>
                    <?php }elseif($utype==='staff'){ ?>
                        <div>
                            <div class="umstyle3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "umstyle5", 'disabled'=>'disabled', 'value'=>'2')) ?></div>
                            <input type="hidden" value="2" name="user_group_id"/>  
                            <div style="clear:both"></div>
                        </div>
                    <?php }elseif($utype==='company'){?>
                        <div>
                            <div class="umstyle3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "umstyle5", 'disabled'=>'disabled', 'value'=>'4')) ?></div>
                            <input type="hidden" value="4" name="user_group_id"/>  
                            <div style="clear:both"></div>
                        </div>
                    <?php }else{}?>
                    <div>
                        <div class="umstyle3"><?php
                            if ($utype === 'student') {
                                echo __('Student ID');
                            } elseif ($utype === 'staff') {
                                echo __('Staff Reg No.');
                            } elseif ($utype === 'company') {
                                echo __('Company Reg No.');
                            } else {
                                echo __('Student ID');
                            }
                            ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("userid", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Username'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("username", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <?php  if ($utype === 'company') { ?>
                    <div>
                        <div class="umstyle3"><?php echo __('Company name'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("first_name", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <?php }else{?>
                    <div>
                        <div class="umstyle3"><?php echo __('First Name'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("first_name", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div>
                        <div class="umstyle3"><?php echo __('Last Name'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("last_name", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <?php }?>
                    <div>
                        <div class="umstyle3"><?php echo __('Email'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>                   

                    <div>
                        <div class="umstyle3"><?php echo __('Land phone'); ?></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("tp_no_land", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Mobile phone'); ?></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("tp_no_mobile", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Web site'); ?></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("url", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <?php if ($utype === 'student' || $utype === 'company') { ?>
                        <div>
                            <div class="umstyle3"><?php echo __('About'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("discription", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                            <div style="clear:both"></div>
                        </div>
                    <?php } elseif ($utype === 'staff') { ?>
                        <div>
                            <div class="umstyle3"><?php echo __('Position'); ?></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("position", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                            <div style="clear:both"></div>
                        </div>

                        <div>
                            <div class="umstyle3"><?php echo __('Teaching area'); ?></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("teaching_area", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                            <div style="clear:both"></div>
                        </div>

                    <?php }elseif($utype === 'company'){ ?>
                        <div>
                            <div class="umstyle3"><?php echo __('Field'); ?></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("com_field", array('label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                            <div style="clear:both"></div>
                        </div>
                    <?php  } ?>
					<div>
						<div class="umstyle3"></div>
						<div class="umstyle4"><?php echo $this->Form->Submit(__('Update User'));?></div>
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
document.getElementById("UserUserGroupId").focus();
</script>