<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagesevent $imagesevent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagesevent'), ['action' => 'edit', $imagesevent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagesevent'), ['action' => 'delete', $imagesevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagesevent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagesevents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagesevent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagesevents view large-9 medium-8 columns content">
    <h3><?= h($imagesevent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($imagesevent->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagem') ?></th>
            <td><?= h($imagesevent->imagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Noticia') ?></th>
            <td><?= $imagesevent->has('noticia') ? $this->Html->link($imagesevent->noticia->title, ['controller' => 'Noticias', 'action' => 'view', $imagesevent->noticia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagesevent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imagesevent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imagesevent->modified) ?></td>
        </tr>
    </table>
</div>
