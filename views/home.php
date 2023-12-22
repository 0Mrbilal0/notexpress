<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
        <img src="/assets/images/nx-line-dark.svg" alt="logo" width="320">
        <p class="col-md-8 fs-4">
            <?= $pageDescription ?? 'Undefined' ?>
        </p>
        <a class="btn btn-primary btn-lg" href="/note/add">
            Créer une nouvelle note
        </a>
    </div>
</div>
<div class="row mb-2">
    <?php
    foreach ($notes as $note) {
        include __DIR__ . '/components/note_card.php';
    }
    ?>
</div>