@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('admin.category.store') }}">
    @csrf
    <div class="input-field col s12">
        <input  id="name" name="name" type="text" class="validate" required>
        <label for="name">Добавить категорию</label>
    </div>
    <button type="submit" class="btn">Создать</button>
</form>
@if (count ($categories) > 0)
<ul class="collapsible">
    @foreach ($categories as $category)
        <li class="admin-catalog">
            <div class="collapsible-header">
                <h5>{{$category->name}}</h5>
                <div class="actions">
                    {!! Form::open(['route'=>['admin.category.destroy',$category->id],'method' => 'delete']) !!}
                        <button class="btn">Удалить</button>
                    {!! Form::close() !!}
                    <button class="btn">Редактировать</button>
                </div>
            </div>
            <div class="collapsible-body">
                    <form method="POST" action="{{ route('admin.category.store') }}">
                            @csrf
                            <div class="input-field col s12">
                                <input  id="{{$category->name}}" name="name" type="text" class="validate" required>
                                <input id="parent" name="parent" type="hidden"  required readonly value="{{$category->id}}">
                                <label for="{{$category->name}}">Добавить дочернюю категорию</label>
                            </div>
                            <button type="submit" class="btn">Создать</button>
                        </form>
                @if (count ($category->children) > 0)
                        @include('admin.catalogthree.li')
                @endif
            </div>

        </li>
    @endforeach
</ul>
@endif


@endsection
