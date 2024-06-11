@extends('supervisor.layouts.application')

@section('main')

  @if (Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-sm bg-green-50" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif

  <div class="p-4 bg-white rounded-sm shadow-sm">

    <form method="POST" action="{{ route('project.store') }}" autocomplete="off">

      @csrf

      <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Title') }}:
        </label>
        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="summary" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Summary') }}:
        </label>
        <textarea rows="16" id="summary" name="summary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
      </div>

      <div class="mb-5">
        <label for="keywords" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Keywords') }}:
        </label>
        <input type="text" id="keywords" name="keywords" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="specialization" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Specialization') }}:
        </label>
        <select multiple id="specialization" name="specialization[]" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
          @foreach ($specializations as $specialization)
            <option value="{{ $specialization->id }}" class="flex items-center p-4 mb-4 text-sm text-gray-800 border border-gray-300 rounded-sm bg-gray-50">{{ $specialization->level . ' / ' . $specialization->title }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 font-medium rounded-sm text-sm px-5 py-2.5 text-center">
        {{ __('Create') }}
      </button>

    </form>

  </div>

@endsection
