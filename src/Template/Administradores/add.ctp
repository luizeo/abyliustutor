<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administradores form large-9 medium-8 columns content">
    <?= $this->Form->create($administradore) ?>
    <fieldset>
        <legend><?= __('Add Administradore') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->control('senha', ['type' => 'password']);
            echo $this->Form->control('confirm_senha',['type' => 'password']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
