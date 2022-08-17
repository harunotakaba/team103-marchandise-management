@extends('layouts.app')
@section('content')
<div class="container small">
  <h1>ユーザーの登録画面</h1>

  <form action="{{ route('userRegister') }}" method="POST">
  @csrf
    <fieldset>
      <div class="form-group">
        <label for="user_name">{{ __('ユーザー名') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
        <input type="text" class="form-control {{ $errors->has('user_name') ? 'is-invalid' : '' }}" name="user_name" id="user_name">
        @if ($errors->has('user_name'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('user_name') }}
          </span>
        @endif
      </div>
      <div class="form-group">
        <label for="email">{{ __('Eメール') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('email') }}
          </span>
        @endif
      </div>
      <div class="form-group">
        <label for="password">{{ __('パスワード') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" value="{{ old('password') }}">
        @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('password') }}
          </span>
        @endif
      </div>
      <div class="form-group">
        <label for="confirm_password">{{ __('パスワード確認用') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
        <input type="password" class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}">
        @if ($errors->has('confirm_password'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('confirm_password') }}
          </span>
        @endif
      </div>
        <button type="submit" class="btn btn-success">
            {{ __('登録') }}
        </button>
      </div>
    </fieldset>
  </form>
</div>
@endsection