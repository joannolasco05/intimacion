<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Intimaciones'), ['controller' => 'Intimaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intimacione'), ['controller' => 'Intimaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($cliente->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Identificacion') ?></th>
            <td><?= h($cliente->tipo_identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Identificacion') ?></th>
            <td><?= h($cliente->identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($cliente->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($cliente->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= $this->Number->format($cliente->celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Oficina') ?></th>
            <td><?= $this->Number->format($cliente->oficina) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Garantias') ?></h4>
        <?php if (!empty($cliente->garantias)): ?>
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
            <?php foreach ($cliente->garantias as $garantias): ?>
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
    <div class="related">
        <h4><?= __('Related Intimaciones') ?></h4>
        <?php if (!empty($cliente->intimaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Prestamo Id') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->intimaciones as $intimaciones): ?>
            <tr>
                <td><?= h($intimaciones->id) ?></td>
                <td><?= h($intimaciones->prestamo_id) ?></td>
                <td><?= h($intimaciones->cliente_id) ?></td>
                <td><?= h($intimaciones->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Intimaciones', 'action' => 'view', $intimaciones->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Intimaciones', 'action' => 'edit', $intimaciones->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Intimaciones', 'action' => 'delete', $intimaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intimaciones->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prestamos') ?></h4>
        <?php if (!empty($cliente->prestamos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Monto Solicitado') ?></th>
                <th><?= __('Monto Aprobado') ?></th>
                <th><?= __('Monto Desembolsado') ?></th>
                <th><?= __('Fecha Aprobacion') ?></th>
                <th><?= __('Fecha Desembolso') ?></th>
                <th><?= __('Fecha Saldo') ?></th>
                <th><?= __('Plazo') ?></th>
                <th><?= __('Tasa') ?></th>
                <th><?= __('Fiador Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->prestamos as $prestamos): ?>
            <tr>
                <td><?= h($prestamos->id) ?></td>
                <td><?= h($prestamos->cliente_id) ?></td>
                <td><?= h($prestamos->monto_solicitado) ?></td>
                <td><?= h($prestamos->monto_aprobado) ?></td>
                <td><?= h($prestamos->monto_desembolsado) ?></td>
                <td><?= h($prestamos->fecha_aprobacion) ?></td>
                <td><?= h($prestamos->fecha_desembolso) ?></td>
                <td><?= h($prestamos->fecha_saldo) ?></td>
                <td><?= h($prestamos->plazo) ?></td>
                <td><?= h($prestamos->tasa) ?></td>
                <td><?= h($prestamos->fiador_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Prestamos', 'action' => 'view', $prestamos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Prestamos', 'action' => 'edit', $prestamos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prestamos', 'action' => 'delete', $prestamos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prestamos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
