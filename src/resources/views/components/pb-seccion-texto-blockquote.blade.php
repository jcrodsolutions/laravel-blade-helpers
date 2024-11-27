<x-lbh-pb-titulo-row :tituloRowClasses="$tituloRowClasses" :titulo="$titulo" />
<div class="row pt-3">
    <div class="col-xs-12 col-md-8 offset-md-2">
        <figure class="d-none d-md-block">
            <blockquote class="blockquote" style="{{ $estilosDelTexto }}">
                {!! $texto !!}
            </blockquote>
        </figure>
        
        <div class="d-md-none">
            <p style="{{ $estilosDelTexto }}">
                {!! $texto !!}
            </p>
        </div>
    </div>
</div>
