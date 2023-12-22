# NoteXpress

Application de prise de notes, avec une architecture MVC, développée en PHP8 et SQLite3.

---

## Models

Dans l'architecture MVC, lorsqu'on fait référence au "model", c'est pour tout ce qui attrait aux données de l'application dans la BDD. Cela concerne également la représentation de ces même données au travers des classes respectives à manipuler.

On peut que MODEL = DATA.

### Model abstrait

Modèle qui regroupe les propriétés et méthodes communes à tous les modèles.

### Note

Modèle représentant une note.

### Category

Modèle représentant une catégorie.

---

## Views

Dossier contenant les vues de l'application.

On peut que VUE = UI.

---

## Controllers

On peut que CONTROLLER = BRAIN.

### Note

Permets de gérer les notes.

### Category

Permets de gérer les catégories.
