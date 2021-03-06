@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
        @parent
        ユーザー認証ページ
@endsection

@section('content')
<p>{{$message}}</p>
<form action="/hello/auth" method="post">
<table>
    @csrf
    <tr>
        <th>mail: </th>
        <td><input type="text" name="email" id=""></td>
    </tr>
    <tr>
        <th>pass: </th>
        <td><input type="password" name="password" id=""></td>
    </tr>
    <tr>
        <th><input type="submit" value="send"></th>
    </tr>
</table>
</form>
@endsection

@section('footer')
copyright 2020 xxxx.
@endsection