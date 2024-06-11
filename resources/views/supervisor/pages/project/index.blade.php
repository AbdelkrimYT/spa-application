@extends('supervisor.layouts.application')

@section('main')

  <div class="mb-4">
    <a href="{{ route('project.create') }}" class="text-white text-sm bg-blue-600 hover:bg-blue-800 focus:ring-blue-300 font-medium rounded-sm px-5 py-2.5">
      {{ __('New') }}
    </a>
  </div>

  @foreach ($projects as $project)
    <div class="mb-4 p-6 bg-white border border-gray-200 rounded-sm">

      <strong class="mb-3 text-2xl font-semibold tracking-tight text-gray-900">
        <a href="{{ route('project.show', $project) }}">
          {{ __('Title') }}: {{ $project->title }}
        </a>
      </strong>

      <textarea rows="16" disabled class="mt-3 mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5">{{ $project->summary }}</textarea>

      <p class="mb-3 text-gray-500">
        {{ __('Keywords') }}: {{ $project->keywords }}
      </p>

      <a href="{{ route('project.edit', $project) }}" class="inline-flex items-center px-8 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-blue-700 rounded-sm hover:bg-gray-100">
        {{ __('Edit') }}
      </a>

      <form action="{{ route('project.destroy', $project) }}" method="POST" autocomplete="off" class="inline">

        @csrf
        @method('DELETE')

        <button type="submit" class="inline-flex items-center px-8 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-sm hover:bg-gray-100">
          {{ __('Delete') }}
        </button>

      </form>

    </div>

  @endforeach

@endsection
