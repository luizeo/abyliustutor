<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Metodo[]|\Cake\Collection\CollectionInterface $metodos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Métodos') ?></li>
        <?php foreach ($metodos as $metodo): ?>
        <li><?= $this->Html->link($metodo->nome, ['target' => 'meth', 'action' => 'view', $metodo->cod_metodo]) ?></li>
       <?php endforeach; ?>
    </ul>
</nav>
<iframe name = "meth" id="meth" style="border: 0;" src="" class="metodos index large-9 medium-8 columns content"  frameborder="0" scrolling="no">Pagina Aqui</iframe>
