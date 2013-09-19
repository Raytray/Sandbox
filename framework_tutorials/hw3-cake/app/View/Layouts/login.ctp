<div class=users form>
<?php echo ->Session->flash('auth'); ?>
<?php echo ->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo ->Form->input('username');
        echo ->Form->input('password');
    ?>
    </fieldset>
<?php echo ->Form->end(__('Login')); ?>
</div>
