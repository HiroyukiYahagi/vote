<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Thread'), ['action' => 'edit', $thread->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Thread'), ['action' => 'delete', $thread->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thread->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Threads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thread'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contents'), ['controller' => 'Contents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Content'), ['controller' => 'Contents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Choises'), ['controller' => 'Choises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Choise'), ['controller' => 'Choises', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="threads view large-9 medium-8 columns content">
    <h3><?= h($thread->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Content') ?></th>
            <td><?= $thread->has('content') ? $this->Html->link($thread->content->title, ['controller' => 'Contents', 'action' => 'view', $thread->content->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($thread->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Image Url') ?></th>
            <td><?= h($thread->image_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($thread->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($thread->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($thread->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($thread->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($thread->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Choises') ?></h4>
        <?php if (!empty($thread->choises)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Deleted') ?></th>
                <th><?= __('Thread Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Image Url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($thread->choises as $choises): ?>
            <tr>
                <td><?= h($choises->id) ?></td>
                <td><?= h($choises->created) ?></td>
                <td><?= h($choises->modified) ?></td>
                <td><?= h($choises->deleted) ?></td>
                <td><?= h($choises->thread_id) ?></td>
                <td><?= h($choises->title) ?></td>
                <td><?= h($choises->description) ?></td>
                <td><?= h($choises->image_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Choises', 'action' => 'view', $choises->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Choises', 'action' => 'edit', $choises->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Choises', 'action' => 'delete', $choises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $choises->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
