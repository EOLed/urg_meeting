<div class="recurrences view">
<h2><?php  __('Recurrence');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recurrence['Recurrence']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recurrence['Recurrence']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recurrence['Recurrence']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recurrence['Recurrence']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurrence', true), array('action' => 'edit', $recurrence['Recurrence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Recurrence', true), array('action' => 'delete', $recurrence['Recurrence']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recurrence['Recurrence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurrences', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurrence', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
