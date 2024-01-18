<?php

namespace Jcrodsolutions\LaravelBladeHelpers\App\View\Components;

use App\Models\Carousel as CarouselModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PbCarousel extends Component
{
    public $carousel;
    public string $idCarousel;
    
    public function __construct(public int|null  $id = 1)
    {
        $this->carousel = CarouselModel::with(['images'])->find($id);
        $this->idCarousel = "pbcarousel-".$id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lbh::components.pb-carousel');
    }
}
