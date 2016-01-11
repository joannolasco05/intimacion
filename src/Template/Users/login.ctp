
<div class='animated bounceIn'>
<h1 class='login_label'>Login</h1>
</div>

<?= $this->Form->create('test',array('class' => 'login_form')) ?>
<div class='animated bounceIn'>
    
<?= $this->Form->input('user') ?>
</div>
<div class='animated bounceIn'>
    
<?= $this->Form->input('password') ?>
</div>

<div class='animated bounceIn'>
    
<?= $this->Form->button('Login') ?>
</div>
<?= $this->Form->end() ?>

