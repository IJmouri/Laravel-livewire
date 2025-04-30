<div class="container my-5">
    <h2>Hello</h2>
    @if(session('success'))
        <div class="alert alert-success my-2">
            {{session('success')}}
        </div>
    @endif
    <form class="form" wire:submit="createNewTodo" action="">
        <div class="form-group">
            <label class="form-label" for="todoitem">Type your Todo task</label>
            <input class="form-control" wire:model="todoItem" type="text" name="todoitem" />
        </div>    
        @error('todoItem')
            <div class="alert alert-danger my-2">
                {{$message}}
            </div>
        @enderror
        <button wire:loading.attr="disabled" class="btn btn-primary my-2">Add Item</button>

    </form>
    <div wire:loading.delay class="spinner-border text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
    <!-- <div wire:loading> 
        Saving todo item...
    </div> -->
    <div class="shadow p-4 my-3">
        <h3>Todo List</h3>
        <ul class="mt-2">
            @foreach($alltodos as $todo)
                <li>{{$todo->todo_item}}</li>
            @endforeach
        </ul>
        {{$alltodos->links()}}
    </div>    
</div>
