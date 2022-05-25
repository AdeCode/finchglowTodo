@extends('layouts.app')
@section('title')
    Todo lists
@endsection
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Todo</h1>
        <span><a href="/create-todo" class="btn btn-primary">Create todo</a></span>
        
    </div>


    <div class="card">
        <div class="card-header">
            Todo lists
        </div>
        <div class="card-body">
          
            @if (count($todos) < 1)
                <h5 class="card-title">No task added, click create todo to add a new Todo</h5> 
            @else
                You have {{count($todos)}} Todo tasks.
            @endif
          <p class="card-text">
            <ul class="list-group">
                @foreach ($todos as $todo)
                    <li class="list-group-item d-flex justify-content-between">
                        {{$todo->name}}
                        <span class="align-item-end">
                            <a href="/edit-todo/{{$todo->id}}"><i class="far fa-edit mr-4" style="font-size:24px"></i></a>

                            <form id="delete-todo-{{$todo->id}}" action="{{route('todo.destroy', $todo->id)}}" style="display: none" method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                            </form>
                            <a href="{{route('todo.index')}}" onclick="
                                if(confirm('Are you sure, you want to delete this task?'))
                                {
                                    event.preventDefault();
                                    document.getElementById('delete-todo-{{$todo->id}}').submit();
                                }
                                else{
                                    event.preventDefault();
                                }">
                                <i class="fas fa-trash-alt ml-4" style="font-size:24px; margin-left:15px; color:red"></i>
                            </a>
                                
                            <!-- <a href="/create-todo" class="btn btn-primary">delete</a> -->
                        </span>
                    </li>
                @endforeach
            </ul>
          </p>
        </div>
    </div>

    
    {{-- <div class="row">
        <h3>Todo lists</h3> 
        <div class="col-8 offset-2 align-self-center">
            <ul class="list-group">
                @foreach ($todos as $todo)
                    <li class="list-group-item d-flex justify-content-between">
                        {{$todo->name}}
                        <span class="align-item-end">
                            <a href="/edit-todo/{{$todo->id}}"><i class="far fa-edit mr-4" style="font-size:24px"></i></a>

                            <form id="delete-todo-{{$todo->id}}" action="{{route('todo.destroy', $todo->id)}}" style="display: none" method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                            </form>
                            <a href="{{route('todo.index')}}" onclick="
                                if(confirm('Are you sure, you want to delete this task?'))
                                {
                                    event.preventDefault();
                                    document.getElementById('delete-todo-{{$todo->id}}').submit();
                                }
                                else{
                                    event.preventDefault();
                                }">
                                <i class="fas fa-trash-alt ml-4" style="font-size:24px; margin-left:15px; color:red"></i>
                            </a>
                                
                            <!-- <a href="/create-todo" class="btn btn-primary">delete</a> -->
                        </span>
                    </li>
                @endforeach
            </ul>
        
        </div>
    </div> --}}
@endsection