<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docente[]|\Cake\Collection\CollectionInterface $docentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discentes'), ['controller' => 'Discentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discente'), ['controller' => 'Discentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docentes index large-9 medium-8 columns content">
    <h3><?= __('Docentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lattes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($docentes as $docente): ?>
            <tr>
                <td><?= $this->Number->format($docente->id) ?></td>
                <td><?= h($docente->nome) ?></td>
                <td><?= $this->Number->format($docente->titulacao) ?></td>
                <td><?= h($docente->email) ?></td>
                <td><?= h($docente->lattes) ?></td>
                <td><?= h($docente->photo) ?></td>
                <td><?= $this->Html->image('fotos/docentes/'. $docente->photo) ?></td>
                <!-- <td><?= ($docente->photo_dir) ?></td> -->
                <td><?= h($docente->created) ?></td>
                <td><?= h($docente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $docente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $docente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $docente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]) ?>
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
