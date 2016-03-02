<div class="fees form">
<?php echo $this->Form->create('Fee');?>
	<fieldset>
		<legend><?php __('Edit Fee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('order');
		echo $this->Form->input('Account');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Fee.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Fee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fees', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Fee Breakdowns', true), array('controller' => 'fee_breakdowns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee Breakdown', true), array('controller' => 'fee_breakdowns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>