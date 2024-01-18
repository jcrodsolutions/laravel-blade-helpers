<?php

namespace Jcrodsolutions\LaravelBladeHelpers\App\View\Components;

use App\Models\Productos;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PbSeccionImagenes extends Component {

    /**
     * Create a new component instance.
     */
    public function __construct(public array $imagenes) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('lbh::components.pb-seccion-imagenes');
    }
}
