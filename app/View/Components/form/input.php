<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public string $type;
    public string $name;
    public string $placeholder;
    public string $size;
    public string $label;
    public string $icon;
    public string $iconPosition;

    /**
     * Create a new component instance.
     */
    public function __construct(string $type, string $name, string $placeholder, string $size, string $label = "", string $icon = "", string $iconPosition = "")
    {
        $this->type         = $type;
        $this->name         = $name;
        $this->placeholder  = $placeholder;
        $this->size         = $size;
        $this->icon         = $icon;
        $this->iconPosition = $iconPosition;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
