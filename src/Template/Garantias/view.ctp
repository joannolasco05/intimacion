<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Garantia'), ['action' => 'edit', $garantia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Garantia'), ['action' => 'delete', $garantia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $garantia->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Garantias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Garantia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Vehiculos'), ['controller' => 'Vehiculos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Vehiculo'), ['controller' => 'Vehiculos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="garantias view large-9 medium-8 columns content">
    <h3><?= h($garantia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $garantia->has('cliente') ? $this->Html->link($garantia->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $garantia->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehiculo') ?></th>
            <td><?= $garantia->has('vehiculo') ? $this->Html->link($garantia->vehiculo->id, ['controller' => 'Vehiculos', 'action' => 'view', $garantia->vehiculo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Prestamo') ?></th>
            <td><?= $garantia->has('prestamo') ? $this->Html->link($garantia->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $garantia->prestamo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre Garantia') ?></th>
            <td><?= h($garantia->nombre_garantia) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($garantia->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($garantia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha') ?></th>
            <td><?= h($garantia->fecha) ?></td>
        </tr>
    </table>
</div>
