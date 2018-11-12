@extends('layouts.admin')
@section('content')
<ul class="collection">
    <li class="collection-item admin-catalog">Alvina<div class="actions"><a class="btn">Удалить</a><a class="btn">Редактировать</div></a></li>
    <li class="collection-item">Alvin</li>
    <li class="collection-item">Alvin</li>
    <li class="collection-item">Alvin</li>
</ul>
<div class="input-field col s12">
    <input  id="first_name" type="text" class="validate">
    <label for="first_name">Добавить категорию</label>
</div>
@endsection
