<?php

namespace Jcrodsolutions\LaravelBladeHelpers\App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PbTituloRow extends Component {

    /**
     * Create a new component instance.
     */
    public function __construct(
            public string $texto,
            public string $titulo,
            public array|null $tituloRowClasses = null,
    ) {
        if (!$tituloRowClasses) {
            $this->tituloRowClasses = [
                'row',
                'mt-3',
                'text-white',
                'bg-accent3',
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('lbh::components.pb-titulo-row');
    }
}
