<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore[]|\Cake\Collection\CollectionInterface $administradores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Operações') ?></li>
        <li><?= $this->Html->link(__('Novo Administrador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administradores index large-9 medium-8 columns content">
    <h3><?= __('Administradores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_admin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administradores as $administradore): ?>
            <tr>
                <td><?= $this->Number->format($administradore->cod_admin) ?></td>
                <td><?= h($administradore->nome) ?></td>
                <td><?= h($administradore->email) ?></td>
                <td><?= h($administradore->senha) ?></td>
                <!-- <td><?= h($administradore->created) ?></td>
                <td><?= h($administradore->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administradore->cod_admin]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administradore->cod_admin]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administradore->cod_admin], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->cod_admin)]) ?>
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
