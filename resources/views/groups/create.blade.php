<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="container">
            <h1>Создание новой группы</h1>        
            <form method="post" action="/groups/create">
            @csrf
                <input type="text" name="title" id="title" placeholder="Введите название группы">
                <input type="text" name="start_from" id="start_from" placeholder="Введите год обучения"></input>
                <button type="submit">Добавить</button>
            </form>
        </div>
        <button><a href="/groups/index">Назад к списку групп</a>
</button>
    </body>
</html>