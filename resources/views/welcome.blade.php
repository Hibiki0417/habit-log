<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>HabitLog</title>
</head>
<body>
    <h1>HabitLog</h1>
    <p>Laravelで作る習慣メモアプリ</p>

    <h2>習慣リスト</h2>

    <ul>
        @foreach ($habits as $habit)
            <li>{{ $habit->title }}</li>
        @endforeach
    </ul>

    <a href="/about">HabitLogについて</a>
</body>
</html>