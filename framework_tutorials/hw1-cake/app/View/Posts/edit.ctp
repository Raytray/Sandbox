<h1>Edit Post</h1>
<?php
    echo ->Form->create('Post');
    echo ->Form->input('title');
    echo ->Form->input('body', array('rows' => '3'));
    echo ->Form->input('id', array('type' => 'hidden'));
    echo ->Form->end('Save Post');
?>
