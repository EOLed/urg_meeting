<div class="meetings form">
<?php echo $this->Form->create('Meeting');?>
	<fieldset>
 		<legend><?php __('Add Meeting'); ?></legend>
	<?php
		echo $this->Form->input('group_id');
		echo $this->Form->input('recurrence_id');
		echo $this->Form->input('title');
		echo $this->Form->input('meeting_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Meetings', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurrences', true), array('controller' => 'recurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurrence', true), array('controller' => 'recurrences', 'action' => 'add')); ?> </li>
	</ul>
</div>
