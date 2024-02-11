<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="container">
            <h1>Список студентов</h1>        
            <ul class="list">
                @foreach($students as $student)
                    <li class="list-item">{{ $student->surname }} {{ $student->name }}</li>
                @endforeach               
            </ul>
        </div>
    </body>
</html>