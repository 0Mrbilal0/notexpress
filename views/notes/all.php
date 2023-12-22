<?php

require_once __DIR__ . "/../../src/actions/getAllNotes.php";

$pageTitle = 'All notes';

?>

<h1><?= $pageTitle ?></h1>

<a href="/note/add" class="btn btn-primary mb-3" role="button" aria-pressed="true">Add note</a>

<section class="list-group">
  <?php foreach ($notes as $note) : ?>
    <a href="/note?slug=<?= $note["slug"] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $note["title"] ?></h5>
        <small><?= $note["created_at"] ?></small>
      </div>
      <p class="mb-1"><?= $note["content"] ?></p>
    </a>
  <?php endforeach; ?>
</section>