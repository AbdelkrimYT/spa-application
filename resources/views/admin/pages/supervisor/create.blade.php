@extends('admin.layouts.application')

@section('main')

  @if (Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-sm bg-green-50" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif

  <div class="p-4 bg-white rounded-sm shadow-sm">

    <form method="POST" action="{{ route('supervisor.store') }}" autocomplete="off">

      @csrf

      <div class="mb-5">
        <label for="name-lable" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Name') }}:
        </label>
        <input type="text" id="name-lable" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="email-lable" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Email') }}:
        </label>
        <input type="text" id="email-lable" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
      </div>

      <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-sm text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        {{ __('Create') }}
      </button>

    </form>

  </div>

@endsection
