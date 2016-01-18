<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de  Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de  Intimaciones'), ['controller' => 'Intimaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Intimacione'), ['controller' => 'Intimaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de  Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('tipo_identificacion') ?></th>
                <th><?= $this->Paginator->sort('identificacion') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('celular') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nombre) ?></td>
                <td><?= h($cliente->tipo_identificacion) ?></td>
                <td><?= h($cliente->identificacion) ?></td>
                <td><?= h($cliente->direccion) ?></td>
                <td><?= h($cliente->telefono) ?></td>
                <td><?= h($cliente->celular) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
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
