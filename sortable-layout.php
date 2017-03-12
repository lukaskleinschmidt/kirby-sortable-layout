
<?php
// Make sure that the sortable plugin is loaded
$kirby->plugin('sortable');

if(!function_exists('sortable')) return;

$sortable = sortable();
$sortable->set('layout', 'custom', __DIR__ . DS . 'custom');
