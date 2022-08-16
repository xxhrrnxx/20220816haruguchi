<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ - 完了</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="text-center">
    @php
    $title = 'お問い合わせ - 完了';
    @endphp

    @extends('layout')

    @section('content')
    <div class="d-flex align-items-center justify-content-center" style="height:300px;">ご意見いただきありがとうございました。</div>
    <button class="btn btn-dark">トップページへ</button>
  </div>
  @endsection
</body>

</html>