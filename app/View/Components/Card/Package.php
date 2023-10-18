<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Package extends Component
{
    public $name;
    public $price;
    public $description;
    public $includes;
    public $href;
    public $featured;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $price, $description, $includes, $href, $featured = false)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->includes = $includes;
        $this->href = $href;
        $this->featured = $featured;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.package');
    }
}
