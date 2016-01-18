<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de  Clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de  Intimaciones'), ['controller' => 'Intimaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Intimacione'), ['controller' => 'Intimaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('tipo_identificacion');
            echo $this->Form->input('identificacion');
            echo $this->Form->input('direccion');
            echo $this->Form->input('telefono');
            echo $this->Form->input('celular');
            echo $this->Form->input('oficina');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
