<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Intimacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="intimaciones index large-9 medium-8 columns content">
    <h3><?= __('Intimaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('prestamo_id') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($intimaciones as $intimacione): ?>
            <tr>
                <td><?= $this->Number->format($intimacione->id) ?></td>
                <td><?= $intimacione->has('prestamo') ? $this->Html->link($intimacione->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $intimacione->prestamo->id]) : '' ?></td>
                <td><?= $intimacione->has('cliente') ? $this->Html->link($intimacione->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $intimacione->cliente->id]) : '' ?></td>
                <td><?= h($intimacione->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $intimacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $intimacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $intimacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intimacione->id)]) ?>
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
