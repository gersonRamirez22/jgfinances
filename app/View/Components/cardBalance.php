<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardBalance extends Component
{
    public $cardTitle, $amount;
    /**
     * Create a new component instance.
     */
    public function __construct($cardTitle = '', $amount = '')
    {
        $this->cardTitle = $cardTitle;
        $this->amount = $amount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-balance');
    }
}
