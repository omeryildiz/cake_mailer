<div class="groups view">
<h2><?php  echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isim'); ?></dt>
		<dd>
			<?php echo h($group['Group']['isim']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mails'), array('controller' => 'mails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail'), array('controller' => 'mails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mails'); ?></h3>
	<?php if (!empty($group['Mail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('ünvan'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['Mail'] as $mail): ?>
		<tr>
			<td><?php echo $mail['id']; ?></td>
			<td><?php echo $mail['ünvan']; ?></td>
			<td><?php echo $mail['email']; ?></td>
			<td><?php echo $mail['group_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mails', 'action' => 'view', $mail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mails', 'action' => 'edit', $mail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mails', 'action' => 'delete', $mail['id']), null, __('Are you sure you want to delete # %s?', $mail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mail'), array('controller' => 'mails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
