<?php

use Gmari\Notas\models\Note;

    $notes = Note::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="src/views/resources/main.css">
    <title>Inicio</title>
</head>
<body>
    <?php require 'resources/navbar.php'; ?>

    <h5 class="container mt-3 mb-4">Inicio</h5>
    <div class="notes-container container p-0">
        <div class="row mx-auto">
            <h4 class="text-center mb-2 pb-2">Mis notas</h4>
            <?php
            foreach($notes as $note){
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                <a href="?view=view&id=<?php echo $note->getUUID(); ?>">
                    <div class="note-preview bg-light">
                        <div class="title d-flex justify-content-center text-light align-items-center mb-1 p-1" style="background-color:#574b45;"><?php echo $note->getTitle(); ?>
                        </div>
                        <div class="px-2 py-4 text-center">
                            <?php echo $note->getContent(); ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>