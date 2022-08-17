<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品編集</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <a href="/item/list">商品一覧</a>
        <form action="/itemEdit" class="col-md-6 offset-md-3" method="post">
            <div class="form-gruop">
                <!-- CSRF保護 -->
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <div class="pt-5">
                    <div class="m-5">
                        <div class="col text-center">
                            <h2 class="fs-1 mb-5 text-center">商品編集(ID:{{$item->id}})</h2>
                            <p>商品名<input type="text" class="form-control" name="name" value="{{$item->name}}"></p>
                            <p>カテゴリ<select class="form-control" id="type" name="type">
                                    @foreach($type as $t)
                                    @if($t == $item->type)
                                    <option value="{{$item->type}}" selected>{{$t}}</option>
                                    @else
                                    <option value="{{$item->type}}">{{$t}}</option>
                                    @endif
                                    @endforeach
                                </select></p>
                            <p>商品詳細<textarea class="form-control" name="detail" rows="5">{{$item->detail}}</textarea></p>
                            <p>ステータス</p><input type="radio" class="form-check-input" name="status" value="1" <?php if ($item->status == 1) : ?> checked<?php endif; ?>>有効
                            <input type="radio" class="form-check-input" name="status" value="0" <?php if ($item->status == 0) : ?> checked<?php endif; ?>>無効
                            <button type="submit" class="btn btn-primary" name="button" value="confirm">登録</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- <form action="/itemDelete/{id}" class="col-md-6 offset-md-3" method="post"> -->
        <!-- CSRF保護 -->
        @csrf
        <!-- <input type="hidden" name="id" value="{{$item->id}}">
            <button class="btn btn-outline-danger">削除</button></a>
        </form> -->
    </div>
</body>

</html>