<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prestamo'), ['action' => 'edit', $prestamo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prestamo'), ['action' => 'delete', $prestamo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prestamo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prestamos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestamo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fiadores'), ['controller' => 'Fiadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fiadore'), ['controller' => 'Fiadores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cuotas'), ['controller' => 'Cuotas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuota'), ['controller' => 'Cuotas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Garantias'), ['controller' => 'Garantias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Garantia'), ['controller' => 'Garantias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Intimaciones'), ['controller' => 'Intimaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intimacione'), ['controller' => 'Intimaciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prestamos view large-9 medium-8 columns content">
    <h3><?= h($prestamo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($prestamo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $prestamo->has('cliente') ? $this->Html->link($prestamo->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $prestamo->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fiadore') ?></th>
            <td><?= $prestamo->has('fiadore') ? $this->Html->link($prestamo->fiadore->id, ['controller' => 'Fiadores', 'action' => 'view', $prestamo->fiadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Monto Solicitado') ?></th>
            <td><?= $this->Number->format($prestamo->monto_solicitado) ?></td>
        </tr>
        <tr>
            <th><?= __('Monto Aprobado') ?></th>
            <td><?= $this->Number->format($prestamo->monto_aprobado) ?></td>
        </tr>
        <tr>
            <th><?= __('Monto Desembolsado') ?></th>
            <td><?= $this->Number->format($prestamo->monto_desembolsado) ?></td>
        </tr>
        <tr>
            <th><?= __('Plazo') ?></th>
            <td><?= $this->Number->format($prestamo->plazo) ?></td>
        </tr>
        <tr>
            <th><?= __('Tasa') ?></th>
            <td><?= $this->Number->format($prestamo->tasa) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Aprobacion') ?></th>
            <td><?= h($prestamo->fecha_aprobacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Desembolso') ?></th>
            <td><?= h($prestamo->fecha_desembolso) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Saldo') ?></th>
            <td><?= h($prestamo->fecha_saldo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cuotas') ?></h4>
        <?php if (!empty($prestamo->cuotas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Prestamo Id') ?></th>
                <th><?= __('Capital') ?></th>
                <th><?= __('Mora') ?></th>
                <th><?= __('Interes') ?></th>
                <th><?= __('Saldo Capital') ?></th>
                <th><?= __('Saldo Mora') ?></th>
                <th><?= __('Saldo Interes') ?></th>
                <th><?= __('Fecha Generacion') ?></th>
                <th><?= __('Fecha Limite') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prestamo->cuotas as $cuotas): ?>
            <tr>
                <td><?= h($cuotas->id) ?></td>
                <td><?= h($cuotas->prestamo_id) ?></td>
                <td><?= h($cuotas->capital) ?></td>
                <td><?= h($cuotas->mora) ?></td>
                <td><?= h($cuotas->interes) ?></td>
                <td><?= h($cuotas->saldo_capital) ?></td>
                <td><?= h($cuotas->saldo_mora) ?></td>
                <td><?= h($cuotas->saldo_interes) ?></td>
                <td><?= h($cuotas->fecha_generacion) ?></td>
                <td><?= h($cuotas->fecha_limite) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cuotas', 'action' => 'view', $cuotas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cuotas', 'action' => 'edit', $cuotas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cuotas', 'action' => 'delete', $cuotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuotas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Garantias') ?></h4>
        <?php if (!empty($prestamo->garantias)): ?>
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
            <?php foreach ($prestamo->garantias as $garantias): ?>
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
        <?php if (!empty($prestamo->intimaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Prestamo Id') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prestamo->intimaciones as $intimaciones): ?>
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
</div>
