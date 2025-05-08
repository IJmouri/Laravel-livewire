<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layout.app')]
class ShowPost extends Component
{
    public function render()
    {
        return view('livewire.show-post');
    }
}
