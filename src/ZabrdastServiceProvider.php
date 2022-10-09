<?php

namespace Zabrdast\Store;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ZabrdastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'zabrdast');

        Livewire::component('store', \Zabrdast\Store\Livewire\Store::class);
    }
}