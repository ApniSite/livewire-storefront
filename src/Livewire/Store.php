<?php

namespace Zabrdast\Store\Livewire;

use Livewire\Component;

class Store extends Component
{
    public $name = "";

    public function render()
    {
        return view('zabrdast::livewire.store');
    }
}