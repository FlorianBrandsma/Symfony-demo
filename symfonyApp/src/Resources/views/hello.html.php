<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "Hello view"); ?>

<h1>Hello world</h1>
<div>
    Hello <?php echo $name ?> from PHP template
</div>
<a href="<?php echo $view['router']->path('Test'); ?>">Link to test</a>

