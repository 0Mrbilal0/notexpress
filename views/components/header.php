<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !empty($pageTitle) ? $pageTitle : 'NoteXpress' ?></title>
    <meta name="description" content="<?= !empty($pageDescription) ? $pageDescription : 'Application NoteXpress' ?>">
    <link rel="shortcut icon" href="/assets/images/nx-icon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Source+Sans+3:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
<div class="container-fluid py-4">
    <header class="pb-3 mb-4 border-bottom d-flex justify-content-between align-items-center">
        <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
            <img src="/assets/images/nx-line-color.svg" alt="logo" width="150">
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-body-emphasis text-decoration-none" href="/notes">Notes</a>
            <a class="me-3 py-2 text-body-emphasis text-decoration-none" href="/note/add">Créer une note</a>
        </nav>
    </header>
    <main class="container">