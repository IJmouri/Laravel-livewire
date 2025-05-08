<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layout.app')]
class Navigate extends Component
{
    public function render()
    {
        return view('livewire.navigate');
    }
}
