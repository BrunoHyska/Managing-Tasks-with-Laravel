@extends('layout.app')

@section('title', 'The list of tasks')

@section('content')

<nav class="mb-4" >
    <a  class="links" href="{{route('tasks.create')}}">Add Task</a>
</nav>
<div>
    @forelse ($tasks as $task )
           <div><a @class(['font-bold line-through'=>$task->completed])  href="{{route('tasks.show' , ['task'=>$task->id])}}" >{{$task->title}}</a></div> 
    @empty
    <div>No tasks</div>

    @endforelse
</div>

@if ($tasks->count())
<nav>
    {{$tasks->links()}}
</nav>
    
@endif

@endsection