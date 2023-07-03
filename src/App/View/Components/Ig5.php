<?php

namespace Jcrodsolutions\LaravelBladeHelpers\App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Ig5 extends Component {

    /**
     * Create a new component instance.
     */
    public function __construct(
            public string|null $id = null,
            public string|null $type = 'text',
            public int|null $mb = 3,
            public string|null $name = 'name',
            public string|null $icon = 'search',
            public string|null $label = 'Label',
            public string|null $value = '',
            public bool|null $required = false,
            public int|null $max = null,
            public int|null $min = null,
            public int|null $maxlength = null,
            public float|null $step = null,
            public array|null $datos = [],
            public bool|null $readonly = false,
            public bool|null $selectOnClick = false,
            public array|null $otros = [],
    ) {
//        if ($type == 'select') {
//            dd($type, $this->datos);
//        }
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('lbh::components.ig5');
    }

}
