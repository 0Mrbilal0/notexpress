<?php

require_once __DIR__ . '/../../src/actions/getNote.php';

$pageTitle = 'Note';
?>

<h1><?= $pageTitle ?></h1>

<div class="list-group">
  <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"><?= $note->getTitle(); ?></h5>
  </div>
  <p class="mb-1"><?= $note->getContent(); ?></p>
</div>
<div class="d-flex align-items-center gap-2">
  <a href="/note/edit?slug=<?= $note->getSlug(); ?>&edit=Edit" class="btn btn-primary">EDIT</a>
  <form action="/note/delete" method="POST">
    <input type="hidden" name="slug" value="<?= $note->getSlug(); ?>">
    <input class="btn btn-danger" type="submit" name="delete" value="Delete">
  </form>
</div>

<?php
