@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('admin.tag.store') }}">
    @csrf
    <div class="input-field col s12">
        <input  id="name" name="name" type="text" class="validate" required>
        <label for="name">Добавить тег</label>
    </div>
    <button type="submit" class="btn">Создать</button>
</form>
@if (count ($tags) > 0)
<ul class="collapsible">
    @foreach ($tags as $tag)
        <li class="admin-catalog">
            <div class="collapsible-header">
                <h5>{{$tag->name}}</h5>
                <div class="actions">
                    {!! Form::open(['route'=>['admin.tag.destroy',$tag->id],'method' => 'delete']) !!}
                        <button class="btn">Удалить</button>
                    {!! Form::close() !!}
                    <button class="btn">Редактировать</button>
                </div>
            </div>
        </li>
    @endforeach
</ul>
@endif


@endsection
