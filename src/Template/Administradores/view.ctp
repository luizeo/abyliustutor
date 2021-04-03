<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Operação') ?></li>
        <li><?= $this->Html->link(__('Editar Administrador'), ['action' => 'edit', $administradore->cod_admin]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Administrador'), ['action' => 'delete', $administradore->cod_admin], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->cod_admin)]) ?> </li>
        <li><?= $this->Html->link(__('Listagem de Administradores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Administrador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administradores view large-9 medium-8 columns content">
    <h3><?= h($administradore->cod_admin) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($administradore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($administradore->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($administradore->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Admin') ?></th>
            <td><?= $this->Number->format($administradore->cod_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($administradore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($administradore->modified) ?></td>
        </tr>
    </table>
</div>
