<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardTotal extends Component
{ 
    public $cardName, $totalAccount;

    /**
     * Create a new component instance.
     */
    public function __construct($cardName = '', $totalAccount = '')
    {
        $this-> cardName = $cardName; 
        $this-> totalAccount = $totalAccount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-total');
    }
}
