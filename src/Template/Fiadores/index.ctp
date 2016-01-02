<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fiadore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fiadores index large-9 medium-8 columns content">
    <h3><?= __('Fiadores') ?></h3>
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
            <?php foreach ($fiadores as $fiadore): ?>
            <tr>
                <td><?= $this->Number->format($fiadore->id) ?></td>
                <td><?= h($fiadore->nombre) ?></td>
                <td><?= h($fiadore->tipo_identificacion) ?></td>
                <td><?= h($fiadore->identificacion) ?></td>
                <td><?= h($fiadore->direccion) ?></td>
                <td><?= h($fiadore->telefono) ?></td>
                <td><?= h($fiadore->celular) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fiadore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fiadore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fiadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiadore->id)]) ?>
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
