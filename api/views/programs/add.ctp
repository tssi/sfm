<div class="programs form">
<?php echo $this->Form->create('Program');?>
	<fieldset>
		<legend><?php __('Add Program'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Programs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tuitions', true), array('controller' => 'tuitions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuition', true), array('controller' => 'tuitions', 'action' => 'add')); ?> </li>
	</ul>
</div>