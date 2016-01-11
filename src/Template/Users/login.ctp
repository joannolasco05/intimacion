<div class="login_form">
<h1>Login</h1>

    
<?= $this->Form->create() ?>
<?= $this->Form->input('user') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>

</div>