<div class="tuitions form">
<?php echo $this->Form->create('Tuition');?>
	<fieldset>
		<legend><?php __('Add Tuition'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('sy');
		echo $this->Form->input('year_level_id');
		echo $this->Form->input('program_id');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tuitions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programs', true), array('controller' => 'programs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Program', true), array('controller' => 'programs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fee Breakdowns', true), array('controller' => 'fee_breakdowns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee Breakdown', true), array('controller' => 'fee_breakdowns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Schemes', true), array('controller' => 'payment_schemes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme', true), array('controller' => 'payment_schemes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tuition Discounts', true), array('controller' => 'tuition_discounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuition Discount', true), array('controller' => 'tuition_discounts', 'action' => 'add')); ?> </li>
	</ul>
</div>