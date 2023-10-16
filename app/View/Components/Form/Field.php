<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Field extends Component
{
    public $for;
    public $type;
    public $note;
    public $values;

    /**
     * Create a new component instance.
     */
    public function __construct($for, $type, $note = '', $values = '')
    {
        $this->for = $for;
        $this->type = $type;
        $this->note = $note;
        $this->values = $values;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.field');
    }
}
