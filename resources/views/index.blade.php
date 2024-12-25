@extends('layouts.app')

@section('title', 'List of tasks')

@section('content')
<nav class="mb-4">
<a href="{{ route('tasks.create') }}" class="font-medium text-gray-700 underline decoration-pink-500">
        Add task!</a>
</nav>


@forelse($tasks as $task)
<div>
        <a href="{{ route('tasks.show',['task'=>$task->id]) }}"
        @class(['line-through'=>$task->completed])> {{$task->title}} </a>
        <br>
</div>

@empty
<div>There are no tasks!!!</div>
@endforelse

@if($tasks->count())
<nav class="mt-4">{{$tasks->links()}}</nav>
@endif

@endsection
