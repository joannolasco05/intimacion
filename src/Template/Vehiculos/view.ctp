<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Vehiculo'), ['action' => 'edit', $vehiculo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehiculo'), ['action' => 'delete', $vehiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Vehiculos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Vehiculo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehiculos view large-9 medium-8 columns content">
    <h3><?= h($vehiculo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= h($vehiculo->marca) ?></td>
        </tr>
        <tr>
            <th><?= __('Modelo') ?></th>
            <td><?= h($vehiculo->modelo) ?></td>
        </tr>
        <tr>
            <th><?= __('Anio') ?></th>
            <td><?= h($vehiculo->anio) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($vehiculo->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Condicion') ?></th>
            <td><?= h($vehiculo->condicion) ?></td>
        </tr>
        <tr>
            <th><?= __('Dealer') ?></th>
            <td><?= h($vehiculo->dealer) ?></td>
        </tr>
        <tr>
            <th><?= __('Chasis') ?></th>
            <td><?= h($vehiculo->chasis) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($vehiculo->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehiculo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Garantias') ?></h4>
        <?php if (!empty($vehiculo->garantias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Vehiculo Id') ?></th>
                <th><?= __('Prestamo Id') ?></th>
                <th><?= __('Nombre Garantia') ?></th>
                <th><?= __('Tipo') ?></th>
                <th><?= __('Fecha') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehiculo->garantias as $garantias): ?>
            <tr>
                <td><?= h($garantias->id) ?></td>
                <td><?= h($garantias->cliente_id) ?></td>
                <td><?= h($garantias->vehiculo_id) ?></td>
                <td><?= h($garantias->prestamo_id) ?></td>
                <td><?= h($garantias->nombre_garantia) ?></td>
                <td><?= h($garantias->tipo) ?></td>
                <td><?= h($garantias->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Garantias', 'action' => 'view', $garantias->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Garantias', 'action' => 'edit', $garantias->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Garantias', 'action' => 'delete', $garantias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $garantias->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
