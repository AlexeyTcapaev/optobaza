<article class="col s12 col m4">
    <div class="card cascade">
        @if($product->image)
        <div class="view">
            <img class="card-img-top" src="/storage/uploads/{{$product->image}}" alt="{{$product->name}}">
        </div>
        @endif
        <div class="card-body card-body-cascade">
            <h5 class="secondary pb-2 pt-1">{{$product->name}}</h5>
            <h4 class="font-weight-bold card-title">{{$product->tags}}</h4>
            <p class="card-text">{{$product->description}}</p>
            <p class="card-text">Артикул: <a>{{$product->article}}</a></p>
            <form method="POST" action="/cart/add">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <button class="btn  waves-effect waves-light" type="submit">В корзину</button>
            </form>
        </div>
    </div>
</article>
