<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="container">
            <h1>Группа: {{ $group->title }}</h1>
                <p>Начало обучения: {{ $group->start_from }}</з>
                <p>Дата создания: {{ $group->created_at }}</p>
                <p>Дата изменения: {{ $group->updated_at }}</p>                        
        </div>
    </body>
</html>