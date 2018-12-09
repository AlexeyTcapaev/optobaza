@extends('layouts.admin')
@section('content')
<ul class="list container-fluid">
    <li>
        <form method="POST" action="{{ route('admin.news.store') }}">
        @csrf
            <div class="col s12">
                <div class="input-field">
                    <input id="name" type="text" name="title" class="validate" value="{{ old('title') }}">
                    <label for="name">Заголовок</label>
                </div>
            </div>
            <h5>Контент</h5>
            <textarea class="textarea-wysiwyg" id="body" name="content">{{ old('body') }}</textarea>
            <div class="actions">
                <button class="btn-flat waves-effect" type="submit">Создать</button>
            </div>
        </form>
    </li>
    @foreach ($news as $new)
    <li>
        <form method="POST" action="{{ route('admin.news.update', ['id' => $new->id]) }}">
        @csrf
        {!! method_field('patch') !!}
            <div class="col s12">
                <div class="input-field">
                <input id="name1" type="text" class="validate" name="title" value="{{$new->title}}">
                    <label for="name1">Название</label>
                </div>
                <p>SLUG: {{$new->slug}}</p>
            </div>
            <h5>Контент</h5>
            <textarea class="textarea-wysiwyg" id="body" name="content">{{$new->content}}</textarea>
            <div class="actions">
                <button class="btn-flat waves-effect">Обновить</button>
            </div>
        </form>
        {!! Form::open(['route'=>['admin.news.destroy',$new->id],'method' => 'delete']) !!}
            <button class="btn btn-flat">Удалить</button>
        {!! Form::close() !!}
    </li>
    @endforeach
</ul>
@endsection
