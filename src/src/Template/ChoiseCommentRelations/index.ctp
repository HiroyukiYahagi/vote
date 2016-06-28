<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Choise Comment Relation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Choises'), ['controller' => 'Choises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Choise'), ['controller' => 'Choises', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="choiseCommentRelations index large-9 medium-8 columns content">
    <h3><?= __('Choise Comment Relations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('deleted') ?></th>
                <th><?= $this->Paginator->sort('choise_id') ?></th>
                <th><?= $this->Paginator->sort('comment_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($choiseCommentRelations as $choiseCommentRelation): ?>
            <tr>
                <td><?= $this->Number->format($choiseCommentRelation->id) ?></td>
                <td><?= h($choiseCommentRelation->deleted) ?></td>
                <td><?= $choiseCommentRelation->has('choise') ? $this->Html->link($choiseCommentRelation->choise->title, ['controller' => 'Choises', 'action' => 'view', $choiseCommentRelation->choise->id]) : '' ?></td>
                <td><?= $choiseCommentRelation->has('comment') ? $this->Html->link($choiseCommentRelation->comment->id, ['controller' => 'Comments', 'action' => 'view', $choiseCommentRelation->comment->id]) : '' ?></td>
                <td><?= h($choiseCommentRelation->created) ?></td>
                <td><?= h($choiseCommentRelation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $choiseCommentRelation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $choiseCommentRelation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $choiseCommentRelation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $choiseCommentRelation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
