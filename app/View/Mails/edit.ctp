<div class="mails form">
<?php echo $this->Form->create('Mail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ünvan');
		echo $this->Form->input('email');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mail.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Mail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
