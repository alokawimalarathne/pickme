<?php

?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('All Groups'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<thead>
						<tr>
							<th><?php echo __('Group Id');?></th>
							<th><?php echo __('Name');?></th>
							<th><?php echo __('Alias Name');?></th>
							<th><?php echo __('Allow Registration');?></th>
							<th><?php echo __('Created');?></th>
							<th><?php echo __('Action');?></th>
						</tr>
					</thead>
					<tbody>
				<?php   if(!empty($userGroups)) {
							foreach ($userGroups as $row) {
								echo "<tr>";
								echo "<td>".$row['UserGroup']['id']."</td>";
								echo "<td>".h($row['UserGroup']['name'])."</td>";
								echo "<td>".h($row['UserGroup']['alias_name'])."</td>";
								echo "<td>";
								if ($row['UserGroup']['allowRegistration']) {
									echo "Yes";
								} else {
									echo "No";
								}
								echo"</td>";
								echo "<td>".date('d-M-Y',strtotime($row['UserGroup']['created']))."</td>";
								echo "<td>";
									echo "<span class='icon'><a href='".$this->Html->url('/editGroup/'.$row['UserGroup']['id'])."'><img src='".SITE_URL."usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";
									if ($row['UserGroup']['id']!=1) {
										echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'deleteGroup', $row['UserGroup']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this group? Delete it your own risk')));
									}
								echo "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan=6><br/><br/>No Data</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>