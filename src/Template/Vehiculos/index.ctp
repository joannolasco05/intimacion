<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehiculos index large-9 medium-8 columns content">
    <h3><?= __('Vehiculos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('marca') ?></th>
                <th><?= $this->Paginator->sort('modelo') ?></th>
                <th><?= $this->Paginator->sort('anio') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('condicion') ?></th>
                <th><?= $this->Paginator->sort('dealer') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehiculos as $vehiculo): ?>
            <tr>
                <td><?= $this->Number->format($vehiculo->id) ?></td>
                <td><?= h($vehiculo->marca) ?></td>
                <td><?= h($vehiculo->modelo) ?></td>
                <td><?= h($vehiculo->anio) ?></td>
                <td><?= h($vehiculo->tipo) ?></td>
                <td><?= h($vehiculo->condicion) ?></td>
                <td><?= h($vehiculo->dealer) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vehiculo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehiculo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->id)]) ?>
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
