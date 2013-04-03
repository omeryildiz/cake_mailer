<div class="mailLists form">
<?php echo $this->Form->create('MailList'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mail List'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('isim');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MailList.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MailList.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mail Lists'), array('action' => 'index')); ?></li>
	</ul>
</div>
