<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fiadore'), ['action' => 'edit', $fiadore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fiadore'), ['action' => 'delete', $fiadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiadore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fiadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fiadore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fiadores view large-9 medium-8 columns content">
    <h3><?= h($fiadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($fiadore->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Identificacion') ?></th>
            <td><?= h($fiadore->tipo_identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Identificacion') ?></th>
            <td><?= h($fiadore->identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($fiadore->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($fiadore->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= h($fiadore->celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Oficina') ?></th>
            <td><?= h($fiadore->oficina) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fiadore->id) ?></td>
        </tr>
    </table>
</div>
