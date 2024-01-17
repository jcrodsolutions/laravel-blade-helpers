<?php

namespace Jcrodsolutions\LaravelBladeHelpers\App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PbSeccionTextoBlockquote extends Component {

    public array $tituloRowClasses;

    /**
     * Create a new component instance.
     */
    public function __construct(
            public string $titulo,
            public string $texto,
            public string|null $titulofgcolor = 'text-white',
            public string|null $titulobgcolor = 'bg-accent3',
    ) {

        $this->tituloRowClasses = [
            'row',
            'mt-3',
            $titulofgcolor,
            $titulobgcolor,
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('lbh::components.pb-seccion-texto-blockquote');
    }
}
