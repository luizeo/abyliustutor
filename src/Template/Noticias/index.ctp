<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Noticia[]|\Cake\Collection\CollectionInterface $noticias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="noticias index large-9 medium-8 columns content">
    <h3><?= __('Noticias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($noticias as $noticia): ?>
            <tr>
                <td><?= $this->Number->format($noticia->id) ?></td>
                <td><?= $noticia->has('user') ? $this->Html->link($noticia->user->id, ['controller' => 'Users', 'action' => 'view', $noticia->user->id]) : '' ?></td>
                <td><?= h($noticia->created) ?></td>
                <td><?= h($noticia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $noticia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $noticia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
