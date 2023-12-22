<h1><?= !empty($pageTitle) ? $pageTitle : '' ?></h1>
<div class="row mb-2">
    <?php
    foreach ($notes as $note) {
        include __DIR__ . '/../components/note_card.php';
    }
    ?>
</div>