<?php

?>
<div id="dashboard">
	<div style="float:left"><?php echo $this->Html->link(__("Dashboard",true),"/dashboard") ?></div>
<?php   if ($this->UserAuth->isAdmin()) { ?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Add User",true),"/addUser") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("All Users",true),"/allUsers") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Add Group",true),"/addGroup") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("All Groups",true),"/allGroups") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Permissions",true),"/permissions") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId()) ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Edit Profile",true),"/editUser/".$this->UserAuth->getUserId()) ?></div>
<?php   } else {?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></div>
        <div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Edit Profile",true),"/editUser/".$this->UserAuth->getUserId()) ?></div>
<?php   } ?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Change Password",true),"/changePassword") ?></div>
	<div style="float:right;padding-left:10px"><?php echo $this->Html->link(__("Sign Out",true),"/logout") ?></div>
	<div style="clear:both"></div>
</div>