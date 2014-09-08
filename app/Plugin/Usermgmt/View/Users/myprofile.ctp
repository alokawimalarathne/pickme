<?php

?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('My Profile'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<tbody>
			<?php       if (!empty($user)) { ?>
							<tr>
								<td><strong><?php echo __('User Id');?></strong></td>
								<td><?php echo $user['User']['id']?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('User Group');?></strong></td>
								<td><?php echo h($user['UserGroup']['name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Username');?></strong></td>
								<td><?php echo h($user['User']['username'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('First Name');?></strong></td>
								<td><?php echo h($user['User']['first_name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Last Name');?></strong></td>
								<td><?php echo h($user['User']['last_name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Email');?></strong></td>
								<td><?php echo h($user['User']['email'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Email Verified');?></strong></td>
								<td><?php
										if ($user['User']['email_verified']) {
											echo 'Yes';
										} else {
											echo 'No';
										}
									?>
								</td>
							</tr>
							<tr>
								<td><strong><?php echo __('Status');?></strong></td>
								<td><?php
										if ($user['User']['active']) {
											echo 'Active';
										} else {
											echo 'Inactive';
										}
									?>
								</td>
							</tr>
                                                        <tr>
								<td><strong><?php echo __('Web siite');?></strong></td>
								<td><?php echo h($user['User']['url'])?></td>
							</tr>
                                                        <tr>
								<td><strong><?php echo __('About');?></strong></td>
								<td><?php echo h($user['User']['discription'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Created');?></strong></td>
								<td><?php echo date('d-M-Y',strtotime($user['User']['created']))?></td>
							</tr>
				<?php   } else {
							echo "<tr><td colspan=2><br/><br/>No Data</td></tr>";
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>