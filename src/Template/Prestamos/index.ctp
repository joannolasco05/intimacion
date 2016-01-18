<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Fiadores'), ['controller' => 'Fiadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Fiadore'), ['controller' => 'Fiadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Cuotas'), ['controller' => 'Cuotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Cuota'), ['controller' => 'Cuotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Intimaciones'), ['controller' => 'Intimaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Intimacione'), ['controller' => 'Intimaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prestamos index large-9 medium-8 columns content">
    <h3><?= __('Prestamos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('monto_solicitado') ?></th>
                <th><?= $this->Paginator->sort('monto_aprobado') ?></th>
                <th><?= $this->Paginator->sort('monto_desembolsado') ?></th>
                <th><?= $this->Paginator->sort('fecha_aprobacion') ?></th>
                <th><?= $this->Paginator->sort('fecha_desembolso') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prestamos as $prestamo): ?>
            <tr>
                <td><?= h($prestamo->id) ?></td>
                <td><?= $prestamo->has('cliente') ? $this->Html->link($prestamo->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $prestamo->cliente->id]) : '' ?></td>
                <td><?= $this->Number->format($prestamo->monto_solicitado) ?></td>
                <td><?= $this->Number->format($prestamo->monto_aprobado) ?></td>
                <td><?= $this->Number->format($prestamo->monto_desembolsado) ?></td>
                <td><?= h($prestamo->fecha_aprobacion) ?></td>
                <td><?= h($prestamo->fecha_desembolso) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prestamo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prestamo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prestamo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prestamo->id)]) ?>
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
