<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discente[]|\Cake\Collection\CollectionInterface $discentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Discente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discentes index large-9 medium-8 columns content">
    <h3><?= __('Discentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf_origin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ingresso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lattes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docentes_co_cod') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discentes as $discente): ?>
            <tr>
                <td><?= $this->Number->format($discente->id) ?></td>
                <td><?= h($discente->nome) ?></td>
                <td><?= $this->Number->format($discente->curso) ?></td>
                <td><?= h($discente->uf_origin) ?></td>
                <td><?= h($discente->ingresso) ?></td>
                <td><?= h($discente->email) ?></td>
                <td><?= h($discente->lattes) ?></td>
                <td><?= $discente->has('docente') ? $this->Html->link($discente->docente->nome, ['controller' => 'Docentes', 'action' => 'view', $discente->docente->id]) : '' ?></td>
                <td><?= h($discente->docentes_co_cod) ?></td>
                <td><?= h($discente->photo) ?></td>
                <td><?= $this->Html->image('fotos/discentes/'. $discente->photo) ?></td>
                <!-- <td><= h($discente->photo_dir) ?></td> -->
                <td><?= h($discente->created) ?></td>
                <td><?= h($discente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $discente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discente->id)]) ?>
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
