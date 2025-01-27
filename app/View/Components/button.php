<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    public string $type;
    public string $variation;
    public string $size;
    public string $text;
    public string $icon;
    public string $iconPosition;
    /**
     * Create a new component instance.
     */
    public function __construct(string $type, string $variation, string $size, string $text, string $icon = "", string $iconPosition = "")
    {
        $this->type         = $type;
        $this->variation    = $variation;
        $this->size         = $size;
        $this->text         = $text;
        $this->icon         = $icon;
        $this->iconPosition = $iconPosition;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
