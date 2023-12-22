<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
            <h3 class="mb-0">
                <?= !empty($note['title']) ? $note['title'] : '' ?>
            </h3>
            <p class="card-text mb-auto">
                <?=
                !empty($note['content']) ? substr($note['content'], 0, 100) : ''
                ?>...
            </p>
            <a href="/note?slug=<?= !empty($note['slug']) ? $note['slug'] : '' ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                Lire la note
                <i class="bi bi-arrow-right-circle"></i>
            </a>
        </div>
        <!-- <div class="">
            <img src="/assets/images/uploads/<?= !empty($note['image']) ? $note['image'] : '' ?>" alt="" class="img-fluid">
        </div> -->
    </div>
</div>