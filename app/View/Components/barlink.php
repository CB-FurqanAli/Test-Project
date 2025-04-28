<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class barlink extends Component
{
    public $href;
    public $label;
    public $icon;
    public function __construct( $href = '#', $label, $icon)
    {
        $this->href = $href;
        $this->label = $label;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.barlink');
    }
}
