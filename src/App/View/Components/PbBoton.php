<?php

namespace Jcrodsolutions\LaravelBladeHelpers\App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PbBoton extends Component
{

    public string $locale;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string | null $url = "#",
        public string | null $classes = 'btn btn-lg bg-accent2 text-white text-capitalize',
        public string | null $text = 'btn',
        public string | null $icon = null,
        public string | null $iconColor = null,
        public string | null $iconClass = null,
        ) {
        $this->locale = app()->getLocale();
        if ($this->url == '') {
            $this->url = "#";
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('lbh::components.pb-boton');
    }
}
