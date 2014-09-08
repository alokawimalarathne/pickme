<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
//echo '<pre>'; print_r(); echo'</pre>';
?>
<div style="float:left;padding-left:10px"><?php if (empty($this->UserAuth->getUserId())) echo $this->Html->link(__("Login", true), "/login") ?></div>
<div style="float:left;padding-left:10px"><?php if (!empty($this->UserAuth->getUserId())) echo $this->Html->link(__("Dash board", true), "/dashboard") ?></div>
<div style="float:right;padding-left:10px"><?php if (!empty($this->UserAuth->getUserId()))echo $this->Html->link(__("Sign Out",true),"/logout") ?></div>

<div  style="float:left;padding-left:10px">
<?php echo $this->Html->link('Register as student', '/register/?utype=student'); ?>
</div>
<div  style="float:left;padding-left:10px">
<?php echo $this->Html->link('Register as staff', '/register/?utype=staff');?>
</div>
<div  style="float:left;padding-left:10px">
<?php echo $this->Html->link('Register as company', '/register/?utype=company');?>
</div>
