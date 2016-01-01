<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehiculos form large-9 medium-8 columns content">
    <?= $this->Form->create($vehiculo) ?>
    <fieldset>
        <legend><?= __('Add Vehiculo') ?></legend>
        <?php
            echo $this->Form->input('marca');
            echo $this->Form->input('modelo');
            echo $this->Form->input('anio');
            echo $this->Form->input('tipo');
            echo $this->Form->input('condicion');
            echo $this->Form->input('dealer');
            echo $this->Form->input('chasis');
            echo $this->Form->input('color');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
