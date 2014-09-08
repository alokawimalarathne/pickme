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
                if($utype==='student'){
                    echo __('Sign Up as Student or '); 
                }elseif($utype==='staff'){
                    echo __('Sign Up as Staff member or ');    
                }elseif($utype==='company'){
                    echo __('Sign Up as Comapny or ');  
                }
                
                ?></span>
                <span  class="umstyle2"><?php echo $this->Html->link(__("Sign In", true), "/login") ?></span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home", true), "/") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
                    <?php echo $this->Form->create('User', array('action' => '/register/?utype='.$utype)); ?>
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
                            <?php  echo $this->Form->input("user_group_id", array('type' => 'hidden', 'value'=>'3')); ?>                         
                            <div style="clear:both"></div>
                        </div>
                    <?php }elseif($utype==='staff'){ ?>
                        <div>
                            <div class="umstyle3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "umstyle5", 'disabled'=>'disabled', 'value'=>'2')) ?></div>
                              <?php  echo $this->Form->input("user_group_id", array('type' => 'hidden', 'value'=>'3')); ?>
                            <div style="clear:both"></div>
                        </div>
                    <?php }elseif($utype==='company'){?>
                        <div>
                            <div class="umstyle3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "umstyle5", 'disabled'=>'disabled', 'value'=>'4')) ?></div>
                             <?php  echo $this->Form->input("user_group_id", array('type' => 'hidden', 'value'=>'4')); ?>
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
                        <div class="umstyle3"><?php echo __('Password'); ?><font color='red'>*</font></div>
                        <div class="umstyle4"><?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Confirm Password'); ?><font color='red'>*</font></div>
                        <div class="umstyle4"><?php echo $this->Form->input("cpassword", array("type" => "password", 'label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
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
                        <div class="umstyle3"><?php echo __('I agree to the PickMe Terms and Privacy'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("policy_agreed", array('label' => false, 'type' => 'checkbox', 'div' => false, 'class' => "umstyle5")) ?></div>
                        <div style="clear:both"></div>
                    </div>

                    <?php if (USE_RECAPTCHA && PRIVATE_KEY_FROM_RECAPTCHA != "" && PUBLIC_KEY_FROM_RECAPTCHA != "") { ?>
                        <div>
                            <div class="umstyle4" style="margin-left:45px"><?php echo $this->UserAuth->showCaptcha(isset($this->validationErrors['User']['captcha'][0]) ? $this->validationErrors['User']['captcha'][0] : ""); ?></div>
                            <div style="clear:both"></div>
                        </div>
                    <?php } ?>
                    <div>
                        <div class="umstyle3"></div>
                        <div class="umstyle4"><?php echo $this->Form->Submit(__('Sign Up')); ?></div>
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
    document.getElementById("UserUsername").focus();
</script>