<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thread->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thread->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Threads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contents'), ['controller' => 'Contents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Content'), ['controller' => 'Contents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Choises'), ['controller' => 'Choises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Choise'), ['controller' => 'Choises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="threads form large-9 medium-8 columns content">
    <?= $this->Form->create($thread) ?>
    <fieldset>
        <legend><?= __('Edit Thread') ?></legend>
        <?php
            echo $this->Form->input('deleted', ['empty' => true]);
            echo $this->Form->input('content_id', ['options' => $contents, 'empty' => true]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('image_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
