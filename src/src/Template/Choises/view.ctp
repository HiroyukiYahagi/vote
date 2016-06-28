<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Choise'), ['action' => 'edit', $choise->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Choise'), ['action' => 'delete', $choise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $choise->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Choises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Choise'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Threads'), ['controller' => 'Threads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thread'), ['controller' => 'Threads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Choise Comment Relations'), ['controller' => 'ChoiseCommentRelations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Choise Comment Relation'), ['controller' => 'ChoiseCommentRelations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="choises view large-9 medium-8 columns content">
    <h3><?= h($choise->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($choise->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($choise->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($choise->deleted) ?></td>
        </tr>
        <tr>
            <th><?= __('Thread') ?></th>
            <td><?= $choise->has('thread') ? $this->Html->link($choise->thread->title, ['controller' => 'Threads', 'action' => 'view', $choise->thread->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($choise->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Image Url') ?></th>
            <td><?= h($choise->image_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($choise->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($choise->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Choise Comment Relations') ?></h4>
        <?php if (!empty($choise->choise_comment_relations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Deleted') ?></th>
                <th><?= __('Choise Id') ?></th>
                <th><?= __('Comment Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($choise->choise_comment_relations as $choiseCommentRelations): ?>
            <tr>
                <td><?= h($choiseCommentRelations->id) ?></td>
                <td><?= h($choiseCommentRelations->deleted) ?></td>
                <td><?= h($choiseCommentRelations->choise_id) ?></td>
                <td><?= h($choiseCommentRelations->comment_id) ?></td>
                <td><?= h($choiseCommentRelations->created) ?></td>
                <td><?= h($choiseCommentRelations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChoiseCommentRelations', 'action' => 'view', $choiseCommentRelations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChoiseCommentRelations', 'action' => 'edit', $choiseCommentRelations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChoiseCommentRelations', 'action' => 'delete', $choiseCommentRelations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $choiseCommentRelations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
