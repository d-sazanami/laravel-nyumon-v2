@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
        @parent
        新規作成ページ
@endsection

@section('content')
<form action="/hello/add" method="post">
<table>
        @csrf
        <tr>
                <th>name</th>
                <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
                <th>mail</th>
                <td><input type="text" name="mail" id=""></td>
        </tr>
        <tr>
                <th>age</th>
                <td><input type="text" name="age" id=""></td>
        </tr>
        <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
        </tr>
</table>
</form>
@endsection

@section('footer')
copyright 2020 xxxx.
@endsection