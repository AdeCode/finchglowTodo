@extends('layouts.app')

@section('title')
    edit Todo
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    Task details
                </div>
                <div class="card-body">
                    <div>
                      <h4 class="card-title">Title: {{$todo->name}}</h4>
                      <p class="card-text">Description: {{$todo->description}}</p>
                      <a href="/todo" class="card-link">Back</a>                   
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection
