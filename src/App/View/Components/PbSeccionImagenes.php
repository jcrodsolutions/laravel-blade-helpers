<?php

namespace App\View\Components\PageBuilder;

use App\Models\Productos;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeccionImagenes extends Component {

    public string $locale='en';

    /**
     * Create a new component instance.
     */
    public function __construct(public array $imagenes) {
        $this->locale = app()->getLocale();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.page-builder.seccion-imagenes');
    }
}
