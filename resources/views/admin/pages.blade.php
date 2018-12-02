@extends('layouts.admin')
@section('content')
<ul class="list container-fluid">
    <li>
        <form method="POST" action="{{ route('admin.page.store') }}">
        @csrf
            <div class="col s12">
                <div class="input-field">
                    <input id="name" type="text" name="name" class="validate" value="{{ old('name') }}">
                    <label for="name">Название</label>
                </div>
            </div>
            <h5>Контент</h5>
            <textarea class="textarea-wysiwyg" id="body" name="content">{{ old('body') }}</textarea>
            <div class="actions">
                    <p>
                            <label>
                              <input type="checkbox" name="nav" />
                              <span>Выводить в навигации</span>
                            </label>
                          </p>
                    <button class="btn-flat waves-effect" type="submit">Создать</button>
            </div>
        </form>
    </li>
    @foreach ($pages as $page)
    <li>
            <div class="col s12">
                <div class="input-field">
                <input id="name1" type="text" class="validate" value="{{$page->name}}">
                    <label for="name1">Название</label>
                </div>
                <div class="col">
                    <p>{{$page->slug}}</p>
                </div>
            </div>
            <h5>Контент</h5>
            <textarea class="textarea-wysiwyg" id="body" name="content">{{$page->content}}</textarea>
            <div class="actions">
                    <a href="#"class="btn-flat waves-effect">Удалить</a>
                    <a href="#"class="btn-flat waves-effect">Обновить</a>
            </div>
    </li>
    @endforeach
</ul>
@endsection
