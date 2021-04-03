<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Noticia $noticia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Noticia'), ['action' => 'edit', $noticia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Noticia'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Noticias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="noticias view large-9 medium-8 columns content">
    <h3><?= h($noticia->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $noticia->has('user') ? $this->Html->link($noticia->user->id, ['controller' => 'Users', 'action' => 'view', $noticia->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($noticia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($noticia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($noticia->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($noticia->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subtitle') ?></h4>
        <?= $this->Text->autoParagraph(h($noticia->subtitle)); ?>
    </div>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($noticia->body)); ?>
    </div>
</div>
