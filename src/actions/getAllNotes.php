<?php

use models\Note;

$noteModel = new Note();
$notes = $noteModel->findAll();
