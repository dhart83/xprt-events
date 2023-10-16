<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{

    public $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = [
            [
                'name' => 'Home',
                'href' => 'home'
            ],
            // [
            //     'name' => 'Services',
            //     'href' => 'services.index'
            // ],
            // [
            //     'name' => 'Add-Ons',
            //     'href' => 'addons.index'
            // ],
            //             [
            //     'name' => 'Gallery',
            //     'href' => 'gallery.index'
            // ],
            // [
            //     'name' => 'Pricing',
            //     'href' => 'pricing.index'
            // ],
            //             [
            //     'name' => 'About',
            //     'href' => 'about.index'
            // ],
            [
                'name' => 'Contact',
                'href' => 'contact.index'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.navbar');
    }
}
