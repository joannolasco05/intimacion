<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Intimaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Cuota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuotas index large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <h3><?= __('Prestamos con Cuotas Atrasadas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('prestamo_id') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('fecha_limite') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('monto') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cuotas as $cuota): ?>
            <tr>
                <td><?= $this->Number->format($cuota->id) ?></td>
                                <td><?= $cuota->has('prestamo') ? $this->Html->link($cuota->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $cuota->prestamo->id]) : 'No' ?></td>
                <td><?= $cuota->has('prestamo') ? $this->Html->link($cuota->prestamo->cliente_id, ['controller' => 'Prestamos', 'action' => 'view', $cuota->prestamo->id]) : '0' ?></td>
                <td><?= h($cuota->fecha_limite) ?></td>
                <td><?= h($cuota->status) ?></td>
                <td><?= $this->Number->format($cuota->monto) ?></td>
                <td class="actions">
                    <?php echo $this->Form->input('intimar', array(
                                  'type'=>'checkbox',
                                  'name' => $this->Number->format($cuota->id),
                                  'id'=> $this->Number->format($cuota->id), 
                                  'format' => array('before', 'input', 'between', 'label', 'after', 'error' )))?></td>
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
    <div style='text-align:center'>
        <?= $this->Form->button('Iniciar Proceso de Intimacion') ?>
    </div>
    <?= $this->Form->end() ?>
</div>
