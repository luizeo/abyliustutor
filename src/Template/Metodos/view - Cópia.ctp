<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Metodo $metodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Operação') ?></li>
        <li><?= $this->Html->link(__('Editar Metodo'), ['action' => 'edit', $metodo->cod_metodo]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Metodo'), ['action' => 'delete', $metodo->cod_metodo], ['confirm' => __('Are you sure you want to delete # {0}?', $metodo->cod_metodo)]) ?> </li>
        <li><?= $this->Html->link(__('Listagem de Metodos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Criar Metodo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="metodos view large-9 medium-8 columns content">
    <!-- <h3><?= h($metodo->cod_metodo) ?></h3> -->
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($metodo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= h($metodo->video) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Cod Metodo') ?></th>
            <td><?= $this->Number->format($metodo->cod_metodo) ?></td>
        </tr> 
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($metodo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($metodo->modified) ?></td>
        </tr>-->
    </table>
    <br>
    <iframe width="560" height="315" src= <?= h($metodo->video) ?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($metodo->descricao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Passos') ?></h4>
        <?= $this->Text->autoParagraph(h($metodo->passos)); ?>
    </div>
    <div class="row">
        <h4><?= __('Referencias') ?></h4>
        <?= $this->Text->autoParagraph(h($metodo->referencias)); ?>
    </div>

</div>
