<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prestamo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prestamo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prestamos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fiadores'), ['controller' => 'Fiadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fiadore'), ['controller' => 'Fiadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cuotas'), ['controller' => 'Cuotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cuota'), ['controller' => 'Cuotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Intimaciones'), ['controller' => 'Intimaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Intimacione'), ['controller' => 'Intimaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prestamos form large-9 medium-8 columns content">
    <?= $this->Form->create($prestamo) ?>
    <fieldset>
        <legend><?= __('Edit Prestamo') ?></legend>
        <?php
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
