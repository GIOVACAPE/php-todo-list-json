<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- BOOTSTRAP alpha1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <title>todo list di gc</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <h1 class="text-center">Todo List</h1>
                    <ul class="list-group mt-4">
                        <li class="list-group-item" v-for="todo in todoList">
                            {{todo.language}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" v-model="language" placeholder="Inserisci elemento" @keyup.enter="addTodoList">
                        <button type="submit" class="btn btn-primary" @click="addTodoList">Inserisci</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>