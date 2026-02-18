@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">My Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
            + New Task
        </a>
    </div>

    <div class="mb-6 p-4 bg-blue-50 border-l-4 border-blue-500 text-blue-700">
        <p>
            You currently have <strong>{{ $tasks->count() }}</strong> tasks in your list.
        </p>
    </div>

    <div class="grid gap-4">
        @forelse ($tasks as $task)
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $task->title }}</h3>
                        <p class="text-gray-600 mt-1">{{ $task->description }}</p>
                        
                        <div class="mt-4 flex gap-4 text-sm text-gray-500">
                            <span class="px-2 py-1 bg-gray-100 rounded text-xs font-semibold uppercase tracking-wide">
                                {{ $task->priority }}
                            </span>
                            <span>Due: {{ $task->due_date ? $task->due_date : 'No Date' }}</span>
                        </div>
                    </div>
                    
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $task->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ ucfirst($task->status) }}
                    </span>
                </div>
            </div>
        @empty
            <div class="text-center py-10 text-gray-500">
                <p>You have no tasks yet.</p>
            </div>
        @endforelse
    </div>
@endsection