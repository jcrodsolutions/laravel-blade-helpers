@if($titulo)
<x-lbh-pb-titulo-row :tituloRowClasses="$tituloRowClasses" :texto="$texto" :titulo="$titulo" />
@endif
<div class="row pt-3 d-none d-md-flex align-items-center">
    @if($col1offset)
    <div class='col-{{ $col1offset }}'></div>
    @endif
    <div @class([
          'col-'.$col1,
          'order-2' => $imgderecha, 
        ])>
        <img src="{{ $imgSrc }}" width="100%" class="rounded" alt="alt"/>
    </div>
    <div class="col-{{ $col2 }}">
        @if($texto)
        <figure class="text-justify">
            <blockquote class="blockquote">
                {!! Str::markdown($texto) !!}
            </blockquote>
        </figure>
        @endif
        @if($botontxt)
        <div class="text-center">
            <a href="{{ $botonurl ?? '#' }}" class="btn btn-lg bg-accent2 text-capitalize">{{ $botontxt }}</a>
        </div>
        @endif
    </div>

</div>

<div class="row pt-3 d-md-none">
    @if(isset($imgsrc) && $imgsrc)
    <img src="{{ $imgSrc }}" class="rounded" style="opacity: 0.2;position:absolute;left:0;right: 0;width:100%;height: auto;"/>
    @endif
    {!! Str::markdown($texto) !!}
</div>