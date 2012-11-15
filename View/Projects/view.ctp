<div class="projects view">
<h2><?php  echo __('Project');?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['full_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bugs'), array('controller' => 'bugs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bug'), array('controller' => 'bugs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bugs');?></h3>
	<?php if (!empty($project['Bugs'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Parent Bug'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Bugs'] as $bug):?>
		<tr class="bug_<?= $bug['state'] ?>">
			<td><?php echo $bug['parent_bug_id'];?></td>
			<td><?php echo $bug['name'];?></td>
			<td><?php echo $bug_states[$bug['state']];?></td>
			<td><?php echo $bug['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bugs', 'action' => 'view', $bug['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bugs', 'action' => 'edit', $bug['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bugs', 'action' => 'delete', $bug['id']), null, __('Are you sure you want to delete `%s`?', $bug['name'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bug'), array('controller' => 'bugs', 'action' => 'add', $project['Project']['id']));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Features');?></h3>
	<?php if (!empty($project['Features'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Features'] as $feature): ?>
		<tr>
			<td><?php echo $feature['name'];?></td>
			<td><?php echo $feature['short_description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'features', 'action' => 'view', $feature['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'features', 'action' => 'edit', $feature['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'features', 'action' => 'delete', $feature['id']), null, __('Are you sure you want to delete `%s`?', $feature['name'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add', $project['Project']['id']));?> </li>
		</ul>
	</div>
</div>
