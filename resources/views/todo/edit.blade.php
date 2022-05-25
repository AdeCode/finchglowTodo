@extends('layouts.app')

@section('title')
    edit Todo
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    Edit Todo
                </div>
                <div class="card-body">
                    <div>
                        <form action="/edit-todo/{{$todo->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label for="name" class="col-md-3 col-form-label text-md-end">Todo Name</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $todo->name }}" required autofocus>
        
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label for="email" class="col-md-3 col-form-label text-md-end">Todo Description</label>
                                <div class="col-md-8">                           
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $todo->description }}" >
        
                                    @error('description')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-outline-primary btn-block" style="width: 100%">
                                        Update
                                    </button>
                                </div>

                            </div>
                            <a href="/todo" class="card-link">Back</a>                  
                        </form>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection
