<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fiadores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fiadores form large-9 medium-8 columns content">
    <?= $this->Form->create($fiadore) ?>
    <fieldset>
        <legend><?= __('Add Fiadore') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('tipo_identificacion');
            echo $this->Form->input('identificacion');
            echo $this->Form->input('direccion');
            echo $this->Form->input('telefono');
            echo $this->Form->input('celular');
            echo $this->Form->input('oficina');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
