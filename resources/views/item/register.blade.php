<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <a href="/item/list">商品一覧</a>
    <!-- バリデーションエラーの表示 -->
    @include('common.errors') 
        <form action="/itemRegister" class="col-md-6 offset-md-3" method="post">
            <div class="form-gruop">
                <!-- CSRF保護 -->
                @csrf
                <div class="pt-5">
                    <div class="m-5">
                        <div class="col text-center">
                            <h2 class="fs-1 mb-5 text-center">商品登録</h2>
                            <p>商品名<input type="text" class="form-control" name="name" value=""></p>
                            <p>カテゴリ<select class="form-control" id="type" name="type">
                                    <option></option>
                                    @foreach($type as $t)
                                    <option value="{{$t}}">{{$t}}</option>
                                    @endforeach
                                </select></p>
                            <p>商品詳細<textarea class="form-control" name="detail" rows="5"></textarea></p>
                            <button type="submit" class="btn btn-primary" name="button" value="confirm">登録</button>
                        </div>
                    </div>
                </div>
        </form>

    </div>
</body>

</html>