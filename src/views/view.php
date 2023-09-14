<?php

use Gmari\Notas\models\Note;

if(count($_POST) > 0){
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $uuid = $_POST['id'];

    $note = Note::get($uuid);
    $note->setTitle($title);
    $note->setContent($content);

    $note->update();
}
else if(isset($_GET['id'])){
    $note = Note::get($_GET['id']);
}
else{
    header('Location: http://localhost/notas/?view=home');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="src/views/resources/main.css">
    <title>Ver mis notas</title>
</head>
<body>
    <?php require 'resources/navbar.php'; ?>
    <h5 class="container mt-3 mb-4">Mi nota</h5>
    <form action="?view=view&id=> <?php echo $note->getUUID(); ?>" method="POST">
        <input type="text" name="title" placeholder="Título" value="<?php echo $note->getTitle(); ?>">
        <input type="hidden" name="id" value="<?php echo $note->getUUID(); ?>">
        <textarea name="content" id="" cols="30" rows="10"><?php echo $note->getContent(); ?></textarea>
        <input type="submit" value="Modificar nota">
        <a href="?view=delete&id=<?php echo $note->getUUID(); ?>">Eliminar nota</a>

    </form>
</body>
</html>