<div class="row pt-3" imagenes>
    @foreach($images??[] as $k=>$image)
    <div class="col-xs-1 col-md-4 vstack gap-2 text-center p-3">
        @if(isset($image['url']) && $image['url'])
        <a href="{{ $image['url'] }}">
            <x-lbh-pb-imagen :img="$image['img']" classes="rounded shadow-lg" :alt="$image['caption']" />
        </a>
        @else
        <x-lbh-pb-imagen :img="$image['img']" classes="rounded shadow-lg" :alt="$image['caption']" />
        @endif
        <h5>{{ $image['caption'] }}</h5>
    </div>
    @endforeach
</div>