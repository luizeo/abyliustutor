<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discente $discente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Discente'), ['action' => 'edit', $discente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Discente'), ['action' => 'delete', $discente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Discentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="discentes view large-9 medium-8 columns content">
    <h3><?= h($discente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($discente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf Origin') ?></th>
            <td><?= h($discente->uf_origin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($discente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lattes') ?></th>
            <td><?= h($discente->lattes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docente') ?></th>
            <td><?= $discente->has('docente') ? $this->Html->link($discente->docente->nome, ['controller' => 'Docentes', 'action' => 'view', $discente->docente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docentes Co Cod') ?></th>
            <td><?= h($discente->docentes_co_cod) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($discente->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= $this->Html->image('fotos/discentes/'. $discente->photo) ?></td>
            <!-- <td><= h($discente->photo_dir) ?></td> -->
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($discente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $this->Number->format($discente->curso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ingresso') ?></th>
            <td><?= h($discente->ingresso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($discente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($discente->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Littlevitae') ?></h4>
        <?= $this->Text->autoParagraph(h($discente->littlevitae)); ?>
    </div>
</div>
