@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Create New Task</h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" 
                   name="title" 
                   id="title" 
                   value="{{ old('title') }}" 
                   required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" 
                      id="description" 
                      rows="3"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
            <input type="date" 
                   name="due_date" 
                   id="due_date" 
                   value="{{ old('due_date') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">
        </div>

        <div>
            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
            <select name="priority" 
                    id="priority" 
                    required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">
                <option value="low" {{ old('priority')=='low' ? 'selected' : '' }}>Low</option>
                <option value="medium" {{ old('priority')=='medium' ? 'selected' : '' }}>Medium</option>
                <option value="high" {{ old('priority')=='high' ? 'selected' : '' }}>High</option>
            </select>
        </div>

        <div>
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Create Task
            </button>
        </div>
    </form>
@endsection