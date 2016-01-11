
<h1 class='login_label'>Login</h1>

    
<?= $this->Form->create('test',array('class' => 'login_form')) ?>
<?= $this->Form->input('user') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
