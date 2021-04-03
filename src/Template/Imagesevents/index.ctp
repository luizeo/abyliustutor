<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagesevent[]|\Cake\Collection\CollectionInterface $imagesevents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagesevent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagesevents index large-9 medium-8 columns content">
    <h3><?= __('Imagesevents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('noticia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagesevents as $imagesevent): ?>
            <tr>
                <td><?= $this->Number->format($imagesevent->id) ?></td>
                <td><?= h($imagesevent->descricao) ?></td>
                <td><?= h($imagesevent->imagem) ?></td>
                <td><?= $imagesevent->has('noticia') ? $this->Html->link($imagesevent->noticia->title, ['controller' => 'Noticias', 'action' => 'view', $imagesevent->noticia->id]) : '' ?></td>
                <td><?= h($imagesevent->created) ?></td>
                <td><?= h($imagesevent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagesevent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagesevent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagesevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagesevent->id)]) ?>
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
