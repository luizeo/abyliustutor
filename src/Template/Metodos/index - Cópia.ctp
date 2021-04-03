<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Metodo[]|\Cake\Collection\CollectionInterface $metodos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Metodo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="metodos index large-9 medium-8 columns content">
    <h3><?= __('Metodos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_metodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('video') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($metodos as $metodo): ?>
            <tr>
                <td><?= $this->Number->format($metodo->cod_metodo) ?></td>
                <td><?= h($metodo->nome) ?></td>
                <td><?= h($metodo->video) ?></td>
                <td><?= h($metodo->created) ?></td>
                <td><?= h($metodo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $metodo->cod_metodo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $metodo->cod_metodo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $metodo->cod_metodo], ['confirm' => __('Are you sure you want to delete # {0}?', $metodo->cod_metodo)]) ?>
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
