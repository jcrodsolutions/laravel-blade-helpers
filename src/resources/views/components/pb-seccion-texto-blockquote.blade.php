<x-lbh-pb-titulo-row :tituloRowClasses="$tituloRowClasses" :texto="$texto" :titulo="__('texto.'.$titulo)" />
<div class="row pt-3">
    <div class="col-xs-12 col-md-8 offset-md-2">
        <figure class="text-justify d-none d-md-block">
            <blockquote class="blockquote">
                @lang("textolargo.".$texto)
            </blockquote>
        </figure>
        
        <div class="d-md-none">
            <p class="text-center">
                @lang("textolargo.".$texto)
            </p>
        </div>
    </div>
</div>