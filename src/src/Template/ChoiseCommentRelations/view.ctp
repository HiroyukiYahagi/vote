<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Choise Comment Relation'), ['action' => 'edit', $choiseCommentRelation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Choise Comment Relation'), ['action' => 'delete', $choiseCommentRelation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $choiseCommentRelation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Choise Comment Relations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Choise Comment Relation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Choises'), ['controller' => 'Choises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Choise'), ['controller' => 'Choises', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="choiseCommentRelations view large-9 medium-8 columns content">
    <h3><?= h($choiseCommentRelation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Choise') ?></th>
            <td><?= $choiseCommentRelation->has('choise') ? $this->Html->link($choiseCommentRelation->choise->title, ['controller' => 'Choises', 'action' => 'view', $choiseCommentRelation->choise->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Comment') ?></th>
            <td><?= $choiseCommentRelation->has('comment') ? $this->Html->link($choiseCommentRelation->comment->id, ['controller' => 'Comments', 'action' => 'view', $choiseCommentRelation->comment->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($choiseCommentRelation->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($choiseCommentRelation->deleted) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($choiseCommentRelation->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($choiseCommentRelation->modified) ?></td>
        </tr>
    </table>
</div>
