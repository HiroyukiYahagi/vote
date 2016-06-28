<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Choise Comment Relations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Choises'), ['controller' => 'Choises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Choise'), ['controller' => 'Choises', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="choiseCommentRelations form large-9 medium-8 columns content">
    <?= $this->Form->create($choiseCommentRelation) ?>
    <fieldset>
        <legend><?= __('Add Choise Comment Relation') ?></legend>
        <?php
            echo $this->Form->input('deleted', ['empty' => true]);
            echo $this->Form->input('choise_id', ['options' => $choises, 'empty' => true]);
            echo $this->Form->input('comment_id', ['options' => $comments, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
