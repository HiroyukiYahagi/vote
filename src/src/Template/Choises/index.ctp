<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Choise'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Threads'), ['controller' => 'Threads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thread'), ['controller' => 'Threads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Choise Comment Relations'), ['controller' => 'ChoiseCommentRelations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Choise Comment Relation'), ['controller' => 'ChoiseCommentRelations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="choises index large-9 medium-8 columns content">
    <h3><?= __('Choises') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('deleted') ?></th>
                <th><?= $this->Paginator->sort('thread_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('image_url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($choises as $choise): ?>
            <tr>
                <td><?= $this->Number->format($choise->id) ?></td>
                <td><?= h($choise->created) ?></td>
                <td><?= h($choise->modified) ?></td>
                <td><?= h($choise->deleted) ?></td>
                <td><?= $choise->has('thread') ? $this->Html->link($choise->thread->title, ['controller' => 'Threads', 'action' => 'view', $choise->thread->id]) : '' ?></td>
                <td><?= h($choise->title) ?></td>
                <td><?= h($choise->image_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $choise->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $choise->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $choise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $choise->id)]) ?>
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
