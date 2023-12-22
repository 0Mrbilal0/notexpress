<?php

use models\Note;

$noteId = $_GET['slug'];

$note = new Note();
$note->find($noteId);
