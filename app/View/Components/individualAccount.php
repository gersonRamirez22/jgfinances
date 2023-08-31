<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class individualAccount extends Component
{
    public $accountName, $accountAmount;
    /**
     * Create a new component instance.
     */
    public function __construct($accountName = '', $accountAmount = '')
    {
        $this->accountName = $accountName;
        $this->accountAmount = $accountAmount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.individual-account');
    }
}
