@extends('layouts.admin')
@section('content')
<table>
    <thead>
        <tr>
            <th>Логин</th>
            <th>E-mail</th>
            <th>Admin</th>
            <th>Обновлён</th>
            <th>Создан</th>
            <th>Удалить</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->admin}}</td>
                <td>{{$user->updated_at}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    {!! Form::open(['route'=>['admin.users.destroy',$user->id],'method' => 'delete']) !!}
                        <button type="submit" class="btn">Удалить</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
