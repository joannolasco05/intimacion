<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Garantia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['controller' => 'Vehiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['controller' => 'Vehiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="garantias index large-9 medium-8 columns content">
    <h3><?= __('Garantias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('vehiculo_id') ?></th>
                <th><?= $this->Paginator->sort('prestamo_id') ?></th>
                <th><?= $this->Paginator->sort('nombre_garantia') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($garantias as $garantia): ?>
            <tr>
                <td><?= $this->Number->format($garantia->id) ?></td>
                <td><?= $garantia->has('cliente') ? $this->Html->link($garantia->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $garantia->cliente->id]) : '' ?></td>
                <td><?= $garantia->has('vehiculo') ? $this->Html->link($garantia->vehiculo->id, ['controller' => 'Vehiculos', 'action' => 'view', $garantia->vehiculo->id]) : '' ?></td>
                <td><?= $garantia->has('prestamo') ? $this->Html->link($garantia->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $garantia->prestamo->id]) : '' ?></td>
                <td><?= h($garantia->nombre_garantia) ?></td>
                <td><?= h($garantia->tipo) ?></td>
                <td><?= h($garantia->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $garantia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $garantia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $garantia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $garantia->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
