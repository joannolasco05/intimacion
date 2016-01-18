<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Intimaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="intimaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($intimacione) ?>
    <fieldset>
        <legend><?= __('Add Intimacione') ?></legend>
        <?php
            echo $this->Form->input('prestamo_id', ['options' => $prestamos]);
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
