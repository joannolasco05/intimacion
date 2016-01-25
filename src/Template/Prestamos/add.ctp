<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Prestamos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Fiadores'), ['controller' => 'Fiadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Fiadore'), ['controller' => 'Fiadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Cuotas'), ['controller' => 'Cuotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Cuota'), ['controller' => 'Cuotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Intimaciones'), ['controller' => 'Intimaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Intimacion'), ['controller' => 'Intimaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prestamos form large-9 medium-8 columns content">
    <?= $this->Form->create($prestamo) ?>
    <fieldset>
        <legend><?= __('Add Prestamo') ?></legend>
        <?php
            echo $this->Form->input('codigo_prestamo');
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('monto_solicitado');
            echo $this->Form->input('monto_aprobado');
            echo $this->Form->input('monto_desembolsado');
            echo $this->Form->input('fecha_aprobacion', ['empty' => true]);
            echo $this->Form->input('fecha_desembolso', ['empty' => true]);
            echo $this->Form->input('fecha_saldo', ['empty' => true]);
            echo $this->Form->input('plazo');
            echo $this->Form->input('tasa');
            echo $this->Form->input('fiador_id', ['options' => $fiadores, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
