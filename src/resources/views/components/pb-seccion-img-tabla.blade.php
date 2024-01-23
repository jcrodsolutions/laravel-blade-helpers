@if ($titulo)
    <x-lbh-pb-titulo-row :tituloRowClasses="$tituloRowClasses" :titulo="$titulo" />
@endif
<div class="row pt-3 d-none d-md-flex align-items-center">
    @if ($col1offset)
        <div class='col-{{ $col1offset }}'></div>
    @endif
    <div @class(['col-' . $col1, 'order-2' => $imgderecha])>
        <x-lbh-pb-imagen :img="$img" />
    </div>
    <div class="col-{{ $col2 }}">
        {!! $tabla !!}
    </div>
</div>
<div class="row pt-3 d-md-none">
    <div class="col-12">
        <x-lbh-pb-imagen :img="$img" />
    </div>
    <div class="col-12 small">
        {!! $tabla !!}
    </div>
</div>
