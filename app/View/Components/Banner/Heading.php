<?php

namespace App\View\Components\Banner;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    public $subHeading;
    public $description;
    /**
     * Create a new component instance.
     */
    public function __construct($subHeading = '', $description = '')
    {
        $this->subHeading = $subHeading;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner.heading');
    }
}
