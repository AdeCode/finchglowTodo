@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <h1>Create Todo</h1>
    <div>
        <form action="/todo" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Todo Name</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">Todo Description</label>
                <div class="col-md-6">
                    {{-- <textarea class="form-control" id="description" placeholder="Todo description" name="description" value="{{ old('email') }}"></textarea> --}}
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" >

                    @error('description')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                        Create Todo
                    </button>
                </div>
            </div>
        </form>

    </div>
    </div>
    <div class="col-md-3"></div>
    </div>
   
    @endsection
