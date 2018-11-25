@extends('layouts.admin')
@section('content')
<ul class="row">
    <li class="col l12 carousel-admin-card">
        <form method="POST" action="{{ route('admin.slide.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="card">
                <div class="view">
                    <i class="card-img-top material-icons" id="i-non-img" alt="Card image cap">add</i>
                    <input type="file" name="image" class="image" onchange="readURL(this);">
                    <img id="new-product" class="card-img-top carousel-admin-card">
                </div>
            </div>
            <div class="row flex align-center">
                    <div class="input-field col s12">
                            <select name="linked">
                                <option value="null">Выберите товар или категорию</option>
                                <optgroup label="Категории">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}},{{get_class($category)}}">{{$category->name}}</option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="Товары">
                                    @foreach ($products as $product)
                                        <option value="{{$category->id}},{{get_class($category)}}" data-icon="/storage/uploads/{{$product->image}}">{{$category->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                    </div>
                    <button class="btn">Создать</button>
            </div>
        </form>
    </li>
    @foreach ($slides as $slide)
        <li class="col l12 carousel-admin-card">
            <form method="POST" action="{{ route('admin.slide.update', ['id' => $slide->id]) }}" enctype="multipart/form-data">
            @csrf
            {!! method_field('patch') !!}
                <div class="card">
                    <div class="view">
                        <input type="file" name="image" class="image" onchange="readURL(this,'#img-{{$slide->id}}');">
                        <img class="card-img-top carousel-admin-card" id="img-{{$slide->id}}" src="/storage/uploads/{{$slide->image}}">
                    </div>
                </div>
                <div class="row align-center flex">
                        <div class="input-field col s8">
                                    <select name="linked">
                                        <option value="null">Выберите товар или категорию</option>
                                        <optgroup label="Категории">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}},{{get_class($category)}}" <?php if($slide->linked_id == $category->id && $slide->linked_type == get_class($category)) echo 'selected'; ?>>{{$category->name}}</option>
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="Товары">
                                            @foreach ($products as $product)
                                                <option value="{{$product->id}},{{get_class($product)}}" data-icon="/storage/uploads/{{$product->image}}" <?php if($slide->linked_id == $product->id && $slide->linked_type == get_class($product)) echo 'selected'; ?>>{{$product->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                        </div>
                        <button class="btn">Обновить</button>
                </div>
            </form>
            {!! Form::open(['route'=>['admin.slide.destroy',$slide->id],'method' => 'delete','class'=>'absolute-form']) !!}
                <button class="btn">Удалить</button>
            {!! Form::close() !!}

        </li>
    @endforeach
@endsection
