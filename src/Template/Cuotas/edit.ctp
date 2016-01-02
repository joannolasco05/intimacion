<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cuota->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cuota->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cuotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Prestamos'), ['controller' => 'Prestamos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestamo'), ['controller' => 'Prestamos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuotas form large-9 medium-8 columns content">
    <?= $this->Form->create($cuota) ?>
    <fieldset>
        <legend><?= __('Edit Cuota') ?></legend>
        <?php
            echo $this->Form->input('prestamo_id', ['options' => $prestamos]);
            echo $this->Form->input('fecha_generacion', ['empty' => true]);
            echo $this->Form->input('fecha_limite', ['empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('monto');
            echo $this->Form->input('capital');
            echo $this->Form->input('interes');
            echo $this->Form->input('mora');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
