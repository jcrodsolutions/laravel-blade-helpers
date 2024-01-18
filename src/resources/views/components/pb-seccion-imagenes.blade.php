<div class="row pt-3" imagenes>
    @foreach($imagenes??[] as $k=>$imagen)
    <div class="col-xs-1 col-md-4 vstack gap-2 text-center p-3">
        @if(isset($imagen['url']) && $imagen['url'])
        <a href="{{ $imagen['url'] }}">
            <img src="{{ asset('images/'.$imagen['imagen']) }}" class="rounded shadow-lg" alt="alt"/>
        </a>
        @else
        <img src="{{ asset('images/'.$imagen['imagen']) }}" class="rounded shadow-lg" alt="alt"/>
        @endif
        <h5>{{ $imagen['leyenda'] }}</h5>
    </div>
    @endforeach
</div>