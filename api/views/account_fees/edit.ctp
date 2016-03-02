<div class="accountFees form">
<?php echo $this->Form->create('AccountFee');?>
	<fieldset>
		<legend><?php __('Edit Account Fee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('fee_id');
		echo $this->Form->input('due_amount');
		echo $this->Form->input('adjust_amount');
		echo $this->Form->input('paid_amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AccountFee.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AccountFee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Account Fees', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fees', true), array('controller' => 'fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee', true), array('controller' => 'fees', 'action' => 'add')); ?> </li>
	</ul>
</div>