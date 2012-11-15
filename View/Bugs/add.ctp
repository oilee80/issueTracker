<div class="bugs form">
<?php echo $this->Form->create('Bug');?>
	<fieldset>
		<legend><?php echo __('%s Bug', array(ucwords($this->action))); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_bug_id', array('empty' => '<Related Bug>'));
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bugs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Comments'), array('controller' => 'feature_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Comment'), array('controller' => 'feature_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Revisions'), array('controller' => 'feature_revisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Revision'), array('controller' => 'feature_revisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
