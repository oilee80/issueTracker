<div class="bugs view">
<h2><?php  echo __('Bug');?></h2>
	<dl>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo h($bug['Bug']['ref']); ?>
			&nbsp;
		</dd>
<?php if(!empty($bug['ParentBug']['id'])): ?>
		<dt><?php echo __('Parent Bug'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bug['ParentBug']['name'], array($bug['ParentBug']['id'])) ?>
			&nbsp;
		</dd>
<?php endif; ?>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bug['Bug']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($bug['Bug']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($states[$bug['Bug']['state']]); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bug['Bug']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bug['Bug']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($bug['Bug']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($bug['Bug']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bug'), array('action' => 'edit', $bug['Bug']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bugs'), array('controller' => 'bugs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
	</ul>
</div>

