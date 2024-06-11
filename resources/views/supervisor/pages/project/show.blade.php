@extends('supervisor.layouts.application')

@section('main')

  <div class="p-4 bg-white rounded-sm shadow-sm">

      <strong class="mb-3 font-semibold tracking-tight text-gray-900">
          {{ __('Title') }}: {{ $project->title }}
      </strong>

      <textarea rows="16" disabled class="mt-3 mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full p-2.5">{{ $project->summary }}</textarea>

      <p class="mb-3 text-gray-500">
        {{ __('Keywords') }}: {{ $project->keywords }}
      </p>

      <div class="mb-5">
        <label for="specialization" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Specialization') }}:
        </label>
        <select disabled multiple id="specialization" name="specialization[]" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500">

          @foreach ($specializations as $specialization)

            @if ($project->specializations()->where('id', $specialization->id)->exists())
              <option value="{{ $specialization->id }}" selected class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-sm bg-blue-50">{{ $specialization->level . ' / ' . $specialization->title }}</option>
            @else
              <option value="{{ $specialization->id }}" class="flex items-center p-4 mb-4 text-sm text-gray-800 border border-gray-300 rounded-sm bg-gray-50">{{ $specialization->level . ' / ' . $specialization->title }}</option>
            @endif

          @endforeach

        </select>
      </div>

  </div>

@endsection
