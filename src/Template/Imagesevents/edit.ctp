<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagesevent $imagesevent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imagesevent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagesevent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imagesevents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagesevents form large-9 medium-8 columns content">
    <?= $this->Form->create($imagesevent) ?>
    <fieldset>
        <legend><?= __('Edit Imagesevent') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('imagem');
            echo $this->Form->control('noticia_id', ['options' => $noticias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
