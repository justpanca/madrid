<?php

namespace App\View\Components\ButtonProfile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonProfileButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-profile.button-profile-button');
    }
}
