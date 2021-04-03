<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docente $docente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docente'), ['action' => 'edit', $docente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docente'), ['action' => 'delete', $docente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discentes'), ['controller' => 'Discentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discente'), ['controller' => 'Discentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docentes view large-9 medium-8 columns content">
    <h3><?= h($docente->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($docente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($docente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lattes') ?></th>
            <td><?= h($docente->lattes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($docente->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
           <td><?= $this->Html->image('fotos/docentes/'. $docente->photo) ?></td>
           <!--  <td><?= ($docente->photo_dir) ?></td> -->
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulacao') ?></th>
            <td><?= $this->Number->format($docente->titulacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($docente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($docente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Discentes') ?></h4>
        <?php if (!empty($docente->discentes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Curso') ?></th>
                <th scope="col"><?= __('Uf Origin') ?></th>
                <th scope="col"><?= __('Littlevitae') ?></th>
                <th scope="col"><?= __('Ingresso') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Lattes') ?></th>
                <th scope="col"><?= __('Docente Id') ?></th>
                <th scope="col"><?= __('Docentes Co Cod') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($docente->discentes as $discentes): ?>
            <tr>
                <td><?= h($discentes->id) ?></td>
                <td><?= h($discentes->nome) ?></td>
                <td><?= h($discentes->curso) ?></td>
                <td><?= h($discentes->uf_origin) ?></td>
                <td><?= h($discentes->littlevitae) ?></td>
                <td><?= h($discentes->ingresso) ?></td>
                <td><?= h($discentes->email) ?></td>
                <td><?= h($discentes->lattes) ?></td>
                <td><?= h($discentes->docente_id) ?></td>
                <td><?= h($discentes->docentes_co_cod) ?></td>
                <td><?= h($discentes->photo) ?></td>
                <td><?= h($discentes->photo_dir) ?></td>
                <td><?= h($discentes->created) ?></td>
                <td><?= h($discentes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Discentes', 'action' => 'view', $discentes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Discentes', 'action' => 'edit', $discentes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Discentes', 'action' => 'delete', $discentes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discentes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
