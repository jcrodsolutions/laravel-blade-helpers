<?php

namespace App\View\Components\PageBuilder;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeccionImgTexto extends Component {

    public array $tituloRowClasses;
    public int $col1offset = 1;
    public string $imgSrc = '';

    public function __construct(
            public string|null $titulo = null,
            public string|null $texto = null,
            public string|null $botontxt = null,
            public string|null $botonurl = null,
            public string|null $titulofgcolor = 'text-white',
            public string|null $titulobgcolor = 'bg-accent3',
            public int|null $col1 = 4,
            public int|null $col2 = 4,
            public string|null $img = "camera-rotate-solid.svg",
            public bool|null $imgderecha = false,
    ) {
        $this->col1offset = (int) ($col1 + $col2 == 12) ? 0 : floor((12 - $col1 - $col2) / 2);

        $this->tituloRowClasses = [
            'row',
            'mt-3',
            $titulofgcolor,
            $titulobgcolor,
        ];

        $this->imgSrc = asset('images/' . $img);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.page-builder.seccion-img-texto');
    }
}
