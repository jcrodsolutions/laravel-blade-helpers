@if($carousel)
<div class="container-fluid">
    <div class="row">
        <div class="col px-0">
            <div id="{{ $idCarousel }}" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($carousel?->images ??[] as $k=>$v)

                    <div @class([
                          'carousel-item',
                          'active'=>$loop->first,
                        ])>
                        @if($v?->href ??false)
                        <a href="{{ $v->href }}">
                            <img src="{{ $v->src }}" class="d-block pb-carousel-img" alt="{{ $v?->alt ?? '' }}">
                        </a>
                        @else
                        <img src="{{ $v->src }}" class="d-block pb-carousel-img" alt="{{ $v?->alt ?? '' }}">
                        @endif
                        @if($v->titulo || $v->texto)
                        <div class="container">
                            <div class="carousel-caption bg-secondary bg-opacity-50 bg-gradient rounded text-start">
                                <div class="col offset-1">
                                    <h1 @class([
                                         'opacity-100',
                                         'd-none'=>!$v->titulo
                                        ])>
                                        @lang("texto.".$v->titulo)</h1>
                                    <p @class([
                                        'opacity-100',
                                        'd-none'=>!$v->texto
                                        ])>
                                        @lang("textolargo.".$v->texto)</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if($v->license_text)
                        <div class="carousel-caption text-end small6" style="z-index: 9999;">
                            <a class="text-decoration-none link-info" href="{{ $v->license_href }}" target="_blank">{{ $v->license_text }}</a>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#{{ $idCarousel }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">@lang("Previous")</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#{{ $idCarousel }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">@lang("Next")</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endif
