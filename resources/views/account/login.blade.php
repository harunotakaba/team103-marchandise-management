@extends('layouts.app')
@section('content')
<div class="container small">
  <h1>ログイン画面</h1>

  <form action="{{ route('login') }}" method="POST">
    @csrf

    <fieldset>
      <div class="form-group">
        <label for="email">{{ __('Eメール') }}</label>
        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          {{ $errors->first('email') }}
        </span>
        @endif
      </div>
      <div class="form-group">
        <label for="password">{{ __('パスワード') }}</label>
        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" value="{{ old('password') }}">
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          {{ $errors->first('password') }}
        </span>
        @endif

      </div>
      @if ($errors->has('login_error'))
        <span class="invalid-feedback" role="alert">
          {{ $errors->first('login_error') }}
        </span>
        @endif

      <button type="submit" class="btn btn-success">
        {{ __('ログイン') }}
      </button>
</div>
</fieldset>
</form>
</div>
@endsection