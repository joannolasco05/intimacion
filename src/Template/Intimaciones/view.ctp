<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Intimacione'), ['action' => 'edit', $intimacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Intimacione'), ['action' => 'delete', $intimacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intimacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Intimaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intimacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="intimaciones view large-9 medium-8 columns content">
    <h3><?= h($intimacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Prestamo') ?></th>
            <td><?= $intimacione->has('prestamo') ? $this->Html->link($intimacione->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $intimacione->prestamo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $intimacione->has('cliente') ? $this->Html->link($intimacione->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $intimacione->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($intimacione->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($intimacione->id) ?></td>
        </tr>
    </table>
</div>
