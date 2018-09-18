<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "Test view"); ?>

<h1>Test</h1>
<div>
    Test from PHP template
</div>

<?php
for($i = 0; $i < count($data); $i++)
{
    echo "<p>".$data[$i].'</p>';
}
?>
