<?php

namespace Jcrodsolutions\LaravelBladeHelpers\App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PbImagen extends Component
{

    public string $imgSrc = '';
    public string $locale;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string | null $img = "camera-rotate-solid.svg",
        public string | null $width = "100%",
        public string | null $classes = 'rounded',
        public string | null $alt = null
    ) {
        $this->locale = app()->getLocale();
        $this->imgSrc = asset(config('blade-helpers.imgpath') . $img);
        $this->alt = $this->alt ?? $this->img;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('lbh::components.pb-imagen');
    }
}
