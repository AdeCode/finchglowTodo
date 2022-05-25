@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Create Todo
            </div>
            <div class="card-body">
                <div>
                    <form action="/todo" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end">Todo Name</label>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
            
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end">Todo Description</label>
                            <div class="col-md-9">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" >
                                @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-9 offset-3 ">
                                <button type="submit" class="btn btn-outline-primary btn-block" style="width:100%">
                                    Create
                                </button>
                            </div>
                        </div>
                        <a href="/todo" class="card-link">Back</a>                   
                    </form>
            
                </div>
            </div>
        </div>
        {{-- <h1>Create Todo</h1> --}}
  
    </div>
    <div class="col-md-2"></div>
    </div>
   
    @endsection
