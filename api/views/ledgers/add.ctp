<div class="ledgers form">
<?php echo $this->Form->create('Ledger');?>
	<fieldset>
		<legend><?php __('Add Ledger'); ?></legend>
	<?php
		echo $this->Form->input('account_id');
		echo $this->Form->input('flag');
		echo $this->Form->input('transac_date');
		echo $this->Form->input('transac_time');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('details');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ledgers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>