<div class=users form>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<p>To login via Netbadge, click <a href="/~rt2ck/hw2-cake/netbadge">here</a>.</p>
<?php echo $this->Form->end(__('Login')); ?>
</div>
