<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Cuota'), ['action' => 'edit', $cuota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cuota'), ['action' => 'delete', $cuota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuota->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de  Cuotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Cuota'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cuotas view large-9 medium-8 columns content">
    <h3><?= h($cuota->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Prestamo') ?></th>
            <td><?= $cuota->has('prestamo') ? $this->Html->link($cuota->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $cuota->prestamo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($cuota->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cuota->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Monto') ?></th>
            <td><?= $this->Number->format($cuota->monto) ?></td>
        </tr>
        <tr>
            <th><?= __('Capital') ?></th>
            <td><?= $this->Number->format($cuota->capital) ?></td>
        </tr>
        <tr>
            <th><?= __('Interes') ?></th>
            <td><?= $this->Number->format($cuota->interes) ?></td>
        </tr>
        <tr>
            <th><?= __('Mora') ?></th>
            <td><?= $this->Number->format($cuota->mora) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Generacion') ?></th>
            <td><?= h($cuota->fecha_generacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Limite') ?></th>
            <td><?= h($cuota->fecha_limite) ?></td>
        </tr>
    </table>
</div>
