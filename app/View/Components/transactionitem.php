<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class transactionitem extends Component
{
    public $date, $transactionsType, $amount, $account, $category;   
    /**
     * Create a new component instance.
     */
    public function __construct($date="", $transactionsType="", $amount="", $account="", $category="")
    {
       $this->date = $date;
       $this->transactionsType = $transactionsType;
       $this->amount = $amount;
       $this->account = $account;
       $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.transactionitem');
    }
}
