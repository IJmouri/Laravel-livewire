<?php

namespace App\Livewire;
use App\Models\Todo;
use Livewire\Component;
use Livewire\withPagination;

class FirstComponent extends Component
{
    use withPagination;
    public $todoItem;

    public function createNewTodo(){

        $this->validate([
            'todoItem' => 'required|min:5|max:20'
        ]);

        Todo::create([
            'todo_item' => $this->todoItem
        ]);

        request()->session()->flash('success','Todo Added Successfully');
        $this->reset(['todoItem']);
    }

    public function render()
    {
        $alltodos = Todo::latest()->paginate(5);
        return view('livewire.first-component',compact('alltodos'));
    }
}
