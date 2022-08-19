<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- BootstrapのCSS読み込み -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>

    </head>

    <body>
        <div class="container center-block">
        <h1>商品管理システム</h1>
        <h2>詳細画面</h2>
        <p>商品名：</p>{{$item->name}}</br>
        <p>商品カテゴリー：</p>{{$item->type}}</br>
        <p>商品詳細：</p>{{$item->detail}}
        </div>
    </body>
</html>