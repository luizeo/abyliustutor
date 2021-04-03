<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discente $discente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Discentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discentes form large-9 medium-8 columns content">
    <?= $this->Form->create($discente, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Discente') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->select('curso', [1 => 'Graduação',2 => 'Mestrado', 3 =>'Doutorado'],
                                    [
                                    'multiple' => false,
                                    'empty' => '(Escolha o curso)'
                                    ]);
            echo $this->Form->control('uf_origin');
            echo $this->Form->control('littlevitae');
            echo $this->Form->control('ingresso');
            echo $this->Form->control('email');
            echo $this->Form->control('lattes');
            echo $this->Form->control('docente_id', ['options' => $docentes]);
            echo $this->Form->control('docentes_co_cod');
            echo $this->Form->control('photo',['type' => 'file']);
            echo $this->Form->control('photo_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
