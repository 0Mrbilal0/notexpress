<?php 
$pageTitle = 'Homepage';

use Models\Category;

$note = new Category();
$note->setName('Bilal');

echo $note->getName();
?>

<h1><?= $pageTitle ?></h1>