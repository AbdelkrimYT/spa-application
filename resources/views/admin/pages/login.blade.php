@extends('admin.layouts.widget')

@section('main')

  @if (Session::has('error'))
    <div class="p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-sm bg-red-50" role="alert">
      {{ Session::get('error') }}
    </div>
  @endif

  <div class="p-8 bg-white rounded-sm shadow-sm">

    <form method="POST" action="{{ route('admin.login') }}" autocomplete="off">

      @csrf

      <div class="mb-5">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Username') }}:
        </label>
        <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Password') }}:
        </label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
      </div>

      <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-red-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center">
        {{ __('Login') }}
      </button>

    </form>

  </div>

@endsection
