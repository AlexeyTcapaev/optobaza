@extends('layouts.admin')
@section('content')
<ul class="row">
    <li class="col l4">
            <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="card cascade">
                        <div class="view">
                            <i class="card-img-top material-icons" id="i-non-img" alt="Card image cap">add</i>
                            <input type="file" name="image" class="image" onchange="readURL(this);">
                            <img id="new-product" class="card-img-top">
                        </div>
                        <div class="card-body card-body-cascade">
                                <div class="input-field col s12">
                                        <input  id="name" name="name" type="text" class="validate" required>
                                        <label for="name">Название товара</label>
                                </div>
                                <div class="input-field col s12">
                                        <input  id="article" name="article" type="text" class="validate" required>
                                        <label  for="article">Артикул</label>
                                </div>
                                <div class="input-field col s12">
                                        <input  id="description" name="description" type="text" class="validate" required>
                                        <label  for="description">Описание</label>
                                </div>
                                <div class="input-field col s12">
                                        <input  id="manufacturer" name="manufacturer" type="text" class="validate" required>
                                        <label  for="manufacturer">Производитель</label>
                                </div>
                                <div class="input-field col s12">
                                        <select multiple name="tags[]">
                                            @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                        <label>Теги</label>
                                </div>
                                <div class="input-field col s12">
                                        <select name="category_id">
                                            <option value="null">Без категории</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <label>Категория</label>
                                </div>
                                <button class="btn">Создать</button>
                    </div>
                </div>
            </form>
    </li>
    @if(count($products) > 0)
    @foreach ($products as $product)
    <li class="col l4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="/storage/uploads/{{$product->image}}" alt="{{$product->name}}">
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="secondary pb-2 pt-1"></i>{{$product->name}}</h5>
                <h5 class="secondary pb-2 pt-1"></i>{{$product->category->name}}</h5>
                @if(count ($product->tags) > 0)
                <h4 class="font-weight-bold card-title">
                    @foreach ($product->tags as $tag)
                        <div class="chip">{{$tag->name}}</div>
                    @endforeach
                </h4>
                @endif
                <p class="card-text">{{$product->description}}</p>
                <div class="admin-catalog">
                    <div class="actions">
                        <button class="btn  waves-effect waves-light">редактировать</button>
                        {!! Form::open(['route'=>['admin.product.destroy',$product->id],'method' => 'delete']) !!}
                            <button class="btn">Удалить</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endforeach
    @endif
</ul>
@endsection
