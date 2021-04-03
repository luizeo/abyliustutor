<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docente $docente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Discentes'), ['controller' => 'Discentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discente'), ['controller' => 'Discentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docentes form large-9 medium-8 columns content">
    <?= $this->Form->create($docente, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Docente') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->select('titulacao', [1 => 'MSc.',2 => 'Dr.'],
                                    [
                                    'multiple' => false,
                                    'empty' => '(Escolha a Titulação)'
                                    ]);
            echo $this->Form->control('email');
            echo $this->Form->control('lattes');
            echo $this->Form->control('photo',['type' => 'file']);
            echo $this->Form->control('photo_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
