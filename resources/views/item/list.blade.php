<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a href="/item/register">ホーム</a>
        <a href="/item/register">商品登録</a>
        <h2 class="fs-1 mb-5 text-center">商品一覧</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>更新日時</th>
                    <th>商品id</th>
                    <th>商品名</th>
                    <th>カテゴリ</th>
                    <th>詳細</th>
                    <th>ステータス</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($item as $value)
                <tr>
                    <td>{{$value->updated_at}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->type}}</td>
                    <td>{{$value->detail}}</td>
                    <td>@if($value->status == 1)有効
                        @else 無効
                        @endif
                    </td>
                    <td>
                        <form action="/item/edit/{{$value->id}}" class="col-md-6 offset-md-3" method="post">
                            <!-- CSRF保護 -->
                            @csrf
                            <input type="hidden" name="id" value="{{$value->id}}">
                            <button type="submit" class="btn btn-primary" name="button" value="confirm">>>編集</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>