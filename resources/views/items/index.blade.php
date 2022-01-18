<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auction index</title>
</head>

<body>
    <h1>出品商品一覧</h1>
    <ul>
        @foreach ($items as $item)
        <!-- // リンク先をidで取得し名前で出力 -->
        <li><a href="/items/{{ $item->id }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>

    <!-- 新規登録画面へジャンプする -->
    <a href="/items/create">出品する</a>
</body>

</html>