<?php

namespace Controllers;

use Models\Note;
use Services\UploadImage;

class NoteController extends AbstractController
{
    static public function add(): void
    {
        $note = new Note();
        $note->setTitle($_POST['title'])
            ->setSlug(uniqid("note_"))
            ->setContent($_POST['content']);
        if (isset($_FILES['image'])) {
            $note->setImage(UploadImage::upload($_FILES['image']));
            $note->bindValues();
            $note->create();
            header('Location: /notes');
        }
    }

    static public function edit(string $slug): void
    {
        // Get actual data of the note
        $currentNote = new Note();
        $currentNote->find($slug);

        // Compare with the form data sent
        if ($currentNote->getTitle() != $_POST['title']) {
            $currentNote->setTitle($_POST['title']);
        }
        if ($currentNote->getContent() != $_POST['content']) {
            $currentNote->setContent($_POST['content']);
        }

        if (!empty($_FILES['image'])) {
            if ($currentNote->getImage() != $_FILES['image']['name']) {
                $currentNote->setImage(UploadImage::upload($_FILES['image']));
            }
        }

        // var_dump($currentNote);
        // die();

        $currentNote->bindValues();
        $currentNote->update($slug);
        header('Location: /note?slug=' . $slug);
    }

    /**
     * Delete a note by slug.
     *
     * @param string $slug
     * @return void
     */
    public function delete(string $slug): void
    {
        $note = new Note();
        $note->find($_GET['slug']);
        $note->delete($slug);
        header('Location: /notes');
    }
}
// Don't write any code below this line