<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="container">
            <h1>Создание нового студента</h1>        
            <form method="post" action="/students/create">
            @csrf
                <input type="text" name="id" id="id" placeholder="Введите id группы">
                <input type="text" name="name" id="name" placeholder="Введите имя">
                <input type="text" name="surname" id="surname" placeholder="Введите фамилию"></input>
                <button type="submit">Добавить</button>
            </form>
        </div>
    </body>
</html>