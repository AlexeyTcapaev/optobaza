@if(count($news) > 0)
<h1>Новости</h1>
<div class="row">
    <ul class="collection news">
        @foreach ($news as $new)
        <li class="collection-item">
                <span class="title">{{$new->title}}</span>
                <a href="#!" class="secondary-content">{{$new->created_at->format('d.m.Y')}}</a>
        </li>
        @endforeach

    </ul>
</div>
@endif
