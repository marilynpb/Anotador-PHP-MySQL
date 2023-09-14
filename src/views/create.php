<?php

use Gmari\Notas\models\Note;

if(count($_POST) > 0){
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';

    $note = new Note($title, $content);
    $note->save();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/views/resources/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Crear nueva nota</title>
</head>
<body>
    <?php require 'resources/navbar.php'; ?>
    <h5 class="container mt-3 mb-4" style="color:#ff7876">Crear nota</h5>
    <form action="?view=create" method="POST">
        <input type="text" name="title" placeholder="Título">
        <textarea name="content" id="" cols="30" rows="10" placeholder="Contenido"></textarea>
        <input type="submit" value="Crear nota">
    </form>
</body>
</html>