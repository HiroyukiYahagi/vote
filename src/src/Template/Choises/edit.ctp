<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $choise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $choise->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Choises'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Threads'), ['controller' => 'Threads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thread'), ['controller' => 'Threads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Choise Comment Relations'), ['controller' => 'ChoiseCommentRelations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Choise Comment Relation'), ['controller' => 'ChoiseCommentRelations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="choises form large-9 medium-8 columns content">
    <?= $this->Form->create($choise) ?>
    <fieldset>
        <legend><?= __('Edit Choise') ?></legend>
        <?php
            echo $this->Form->input('deleted');
            echo $this->Form->input('thread_id', ['options' => $threads, 'empty' => true]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('image_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
