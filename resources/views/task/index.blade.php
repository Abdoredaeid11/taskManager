@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Task Manager</h1>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Tasks</h2>
            <a href="{{route('task.create')}}"><button class="btn btn-primary">Add New Task</button></a>
            
        </div>
        <div class="card-body">
         @livewire('status')
        </div>
    </div>
</div>


<div></div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
