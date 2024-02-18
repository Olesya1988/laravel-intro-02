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
            <p>Начало обучения: {{ $group->start_from }}</p>
            <p>Дата создания: {{ $group->created_at }}</p>
            <p>Дата изменения: {{ $group->updated_at }}</p>                        
        </div>
        <button><a href="/groups">Назад к списку групп</a></button>
        <h1>Список студентов</h1>        
            <ul class="list">
                @foreach($students as $student)
                    <li class="list-item"><a href="/groups/{{$group->id}}/students/{{$student->group_id}}">{{ $student->surname }} {{ $student->name }}</a></li>
                @endforeach               
            </ul>
            <button><a href="/groups/{{$group->id}}/students/create">Создать нового студента</a></button>
    </body>
</html>