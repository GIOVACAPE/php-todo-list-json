<?php

    // recupero il contenuto di todo-list.json

    $string = file_get_contents('../todo-list.json');

    // converto la stringa in array associativo

    $todoList = json_decode($string, true);

    // controllo se c'è un nuovo task

    if(isset ($_POST['todoItem'])){
        $todo_item = $_POST['todoItem'];
        $todo_array = [
            "language" => $todo_item,
            "status" => false,
        ];

        // faccio un push del nuovo elemento dell'array

        $todoList[] = $todo_array;

        // inserisco dato all'interno del todo-list.json
        
        file_put_contents('../todo-list.json', json_encode($todoList));
    }

    header('Content-Type: application/json');
    echo json_encode($todoList);

?>