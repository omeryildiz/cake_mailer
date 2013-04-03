<div class="mailLists view">
<h2><?php  echo __('Mail List'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mailList['MailList']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isim'); ?></dt>
		<dd>
			<?php echo h($mailList['MailList']['isim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($mailList['MailList']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mail List'), array('action' => 'edit', $mailList['MailList']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mail List'), array('action' => 'delete', $mailList['MailList']['id']), null, __('Are you sure you want to delete # %s?', $mailList['MailList']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mail Lists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail List'), array('action' => 'add')); ?> </li>
	</ul>
</div>
