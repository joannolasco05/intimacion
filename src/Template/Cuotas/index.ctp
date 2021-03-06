<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Cuota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de  Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuotas index large-9 medium-8 columns content">
    <h3><?= __('Cuotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('prestamo_id') ?></th>
                <th><?= $this->Paginator->sort('fecha_generacion') ?></th>
                <th><?= $this->Paginator->sort('fecha_limite') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('monto') ?></th>
                <th><?= $this->Paginator->sort('capital') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cuotas as $cuota): ?>
            <tr>
                <td><?= $this->Number->format($cuota->id) ?></td>
                <td><?= $cuota->has('prestamo') ? $this->Html->link($cuota->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $cuota->prestamo->id]) : '' ?></td>
                <td><?= h($cuota->fecha_generacion) ?></td>
                <td><?= h($cuota->fecha_limite) ?></td>
                <td><?= h($cuota->status) ?></td>
                <td><?= $this->Number->format($cuota->monto) ?></td>
                <td><?= $this->Number->format($cuota->capital) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cuota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuota->id)]) ?>
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
