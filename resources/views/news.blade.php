@extends('layouts.magazine')
@section('content')
<ul class="collapsible popout">
    @foreach ($news as $item)
    <li>
        <div class="collapsible-header">{{$item->title}}<span>{{$item->created_at->format('d.m.Y')}}</span></div>
        <div class="collapsible-body">{!!$item->content!!}</div>
    </li>
    @endforeach
</ul>
@endsection
