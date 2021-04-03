<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Metodo $metodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Metodos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="metodos form large-9 medium-8 columns content">
    <?= $this->Form->create($metodo) ?>
    <fieldset>
        <legend><?= __('Add Metodo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('passos');
            echo $this->Form->control('referencias');
            echo $this->Form->control('video');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>