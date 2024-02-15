<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="container">
            <h1>Студент: {{ $student->surname }} {{ $student->name }}</h1>
            <p>Id группы: {{ $student->group_id }}</p>
            <p>Дата создания: {{ $student->created_at }}</p>
            <p>Дата изменения: {{ $student->updated_at }}</p>                        
        </div>
        <button><a href="/groups/{{$group}}/students">Назад к списку студентов</a>
    </body>
</html>