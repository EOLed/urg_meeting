<div class="recurrences form">
<?php echo $this->Form->create('Recurrence');?>
	<fieldset>
 		<legend><?php __('Add Recurrence'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recurrences', true), array('action' => 'index'));?></li>
	</ul>
</div>