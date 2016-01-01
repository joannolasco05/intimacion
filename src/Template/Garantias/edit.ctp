<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $garantia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $garantia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Garantias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['controller' => 'Vehiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['controller' => 'Vehiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="garantias form large-9 medium-8 columns content">
    <?= $this->Form->create($garantia) ?>
    <fieldset>
        <legend><?= __('Edit Garantia') ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('vehiculo_id', ['options' => $vehiculos]);
            echo $this->Form->input('prestamo_id', ['options' => $prestamos]);
            echo $this->Form->input('nombre_garantia');
            echo $this->Form->input('tipo');
            echo $this->Form->input('fecha', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
