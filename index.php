<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>

    <div id="app">
        <div id="add todo" class="container card mt-5">
            <h3 class="pt-3 pb-3 text-uppercase fw-bold">Aggiungi todo:</h3>
            <div>
                <input type="text" placeholder="Scrivi qui" v-model="newToDoText" name="newTodo" @keyup.enter='addTodo()'>
                <button @click="addTodo"><i class="fa-solid fa-plus fa-shake fs-6"></i></button>
            </div>
            <hr>
            <h2 class="pb-3 fw-bold">La tua lista:</h2>
            <ul id="todo-list">
                <li v-for="(todo, index) in todoList" class="todo" :class="todo.done ? 'done' : ''">{{todo.text}}
                    <span>
                        <i class="fa-solid fa-trash float-end"></i>
                    </span>
                </li>
            </ul>
        </div>
        <script src="./js/script.js"></script>
</body>

</html>