<?php
use Gmari\Notas\models\Note;

if(isset($_GET['id'])){
    $note = Note::get($_GET['id']);
    if($note){
        $note->delete();
        header('Location: http://localhost/notas/?view=home');
        exit();
    }
}



