@extends('layouts.admin')
@section('content')
@if (count ($categories) > 0)
<ul class="collection">
    @foreach ($categories as $category)
        <li class="collection-item admin-catalog">
            {{$category->name}}
            <div class="actions">
                {!! Form::open(['route'=>['admin.category.destroy',$category->id],'method' => 'delete']) !!}   
                    <button class="btn">Удалить</button>
                {!! Form::close() !!}
                <button class="btn">Редактировать</button>
            </div>
        </li>
    @endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.category.store') }}">
@csrf
    <div class="input-field col s12">
        <input  id="name" name="name" type="text" class="validate" required>    
        <label for="name">Добавить категорию</label>      
    </div>
    <button type="submit" class="btn">Создать</button>
</form>
@endsection
