<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ユーザー情報編集</div>
        <div class="card-body">
        
        <form action="{{ route('users.postEdit', ['id' => $user->id]) }}" method="post">
            @csrf
            <p>ID: {{ $user->id }}</p>
            <input type="hidden" name="id" value="{{ $user->id }}" />
            <p>名前</p>
            <input type="text" name="name" value="{{ old('name',$user->name)}}" />
            <p>メール</p>
            <input type="text" name="email" value="{{ old('email',$user->email) }}" /><br />
            <p>権限</p>
            <input type="radio" name="role" value="2" {{ old('role',$user->role)==2 ? "checked" : "" }} />管理者
            <input type="radio" name="role" value="1" {{ old('role',$user->role)==1 ? "checked" : "" }}/>利用者<br />
            <input type="submit" value="更新" />
          </form>
        
        </div>
      </div>
    </div>
  </div>
</div>