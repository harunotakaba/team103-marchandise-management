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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">

        <!-- 表題 -->
        <h1>商品管理システム</h1>
    
        <!-- 検索 -->
        <div class="input-group">
            <div class="form-outline">
                <form method="get" action="/home">
                    <input type="text" class="form-control"  name="key" value="" palceholder="検索キーワードを入力">
                    <!-- <label class="form-label" for="form1">検索</label> -->
                    <input class="btn btn-primary btn-sm"  type="submit" value="検索">
                    <i class="bi bi-search"></i>
                </form>
            </div>
        </div>

        <!-- テーブル -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>商品名</th>
                        <th>カテゴリー</th>
                        <th>更新日時</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <th class='table-text'>{{ $item->id }}</th>
                        <td class='table-text'><a href="/home/detail/{{$item->id}}">{{ $item->name }}</a></td>
                        <td class='table-text'>{{ $item->type }}</td>
                        <td class='table-text'>{{ $item->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $items->appends(request()->query())->Links('pagination::bootstrap-4') }}
        </div>
    </body>
</html>