<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    @php
    $title = 'お問い合わせ';
    @endphp

    @extends('layout')

    @section('content')
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
    <div class="container">
      {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
      {{ csrf_field() }}
      <div class="form-group row">
        <p class="col-sm-4 col-form-label font-weight-bold">お名前 <font color="red">※</font>
        </p>
        <div class="col-sm-4">
          {{ Form::text('last_name', null, ['class' => 'form-control']) }}
          <p>
            <font color="gray">例）山田</font>
          </p>
        </div>
        @if ($errors->has('last_name'))
        <p class="alert alert-danger">{{ $errors->first('last_name') }}</p>
        @endif
        <div class="col-sm-4">
          {{ Form::text('first_name', null, ['class' => 'form-control']) }}
          <p>
            <font color="gray">例）太郎</font>
          </p>
        </div>
        @if ($errors->has('first_name'))
        <p class="alert alert-danger">{{ $errors->first('first_name') }}</p>
        @endif
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label font-weight-bold">性別 <font color="red">※</font>
        </p>
        <div class="col-sm-8">
          <div class="form-check form-check-inline">
            <input type="radio" name="gender" class="form-check-input" id="1" value="男性" {{ old ('gender') == '男性' ? 'checked' : '' }} checked>
            <label for="1" class="form-check-label">男性</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="gender" class="form-check-input" id="2" value="女性" {{ old ('gender') == '女性' ? 'checked' : '' }}>
            <label for="2" class="form-check-label">女性</label>
          </div>
        </div>
      </div>
      @if ($errors->has('gender'))
      <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label font-weight-bold">メールアドレス <font color="red">※</font>
        </p>
        <div class="col-sm-8">
          {{ Form::text('email', null, ['class' => 'form-control']) }}
          <font color="gray">例）test@example.com</font>
        </div>
      </div>
      @if ($errors->has('email'))
      <p class="alert alert-danger">{{ $errors->first('email') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label font-weight-bold">郵便番号 <font color="red">※</font>
        </p>
        <div class="col-sm-8">
          〒{{ Form::text('postcode', null, ['class' => 'form-control']) }}
          <font color="gray">例）123-4567</font>
        </div>
      </div>
      @if ($errors->has('postcode'))
      <p class="alert alert-danger">{{ $errors->first('postcode') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label font-weight-bold">住所 <font color="red">※</font>
        </p>
        <div class="col-sm-8">
          {{ Form::text('address', null, ['class' => 'form-control']) }}
          <font color="gray">例）東京都渋谷区千駄ヶ谷1-2-3</font>
        </div>
      </div>
      @if ($errors->has('address'))
      <p class="alert alert-danger">{{ $errors->first('address') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label font-weight-bold">建物名</p>
        <div class="col-sm-8">
          {{ Form::text('building_name', null, ['class' => 'form-control']) }}
          <font color="gray">例）千駄ヶ谷マンション101</font>
        </div>
      </div>
      @if ($errors->has('building_name'))
      <p class="alert alert-danger">{{ $errors->first('building_name') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label font-weight-bold">ご意見 <font color="red">※</font>
        </p>
        <div class="col-sm-8">
          {{ Form::textarea('opinion', null, ['class' => 'form-control']) }}
        </div>
      </div>
      @if ($errors->has('opinion'))
      <p class="alert alert-danger">{{ $errors->first('opinion') }}</p>
      @endif

      <div class="text-center">
        {{ Form::submit('確認', ['class' => 'btn btn-dark px-5']) }}
      </div>
      {!! Form::close() !!}
    </div>
    @endsection
  </div>
</body>

</html>