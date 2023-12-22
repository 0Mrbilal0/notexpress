<h1><?= $pageTitle ?></h1>

<a href="/notes" class="btn btn-secondary mb-3" role="button" aria-pressed="true">Notes list</a>

<form action="" method="post">
  <div class="form-group mb-2">
    <label for="title" class="form-label">Titre de la note</label>
    <input type="text" name="title" id="title" class="form-control">
  </div>
  <div class="form-group mb-2">
    <label for="content" class="form-label">Contenu de la note</label>
    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <input type="submit" name="submit" value="Enregister" class="btn btn-success">
</form>