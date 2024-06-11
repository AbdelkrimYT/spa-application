@extends('admin.layouts.widget')

@section('main')

  @if (Session::has('error'))
    <div class="p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-sm bg-blue-50" role="alert">
      {{ Session::get('error') }}
    </div>
  @endif

  <div class="p-8 bg-white rounded-sm shadow-sm">

    <form method="POST" action="{{ route('supervisor.login') }}" autocomplete="off">

      @csrf

      <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Email') }}:
        </label>
        <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Password') }}:
        </label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center">
        {{ __('Login') }}
      </button>

    </form>

  </div>

@endsection
