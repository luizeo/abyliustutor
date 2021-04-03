<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administradore->cod_admin],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->cod_admin)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administradores form large-9 medium-8 columns content">
    <?= $this->Form->create($administradore) ?>
    <fieldset>
        <legend><?= __('Edit Administradore') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->control('senha');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
