@extends('supervisor.layouts.application')

@section('main')

  <div class="mb-4 p-4 bg-white rounded-sm shadow-sm">

    <form action="{{ route('supervisor.update.name') }}" method="POST" autocomplete="off">

      @csrf

      <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Name') }}:
        </label>
        <input type="text" id="name" name="name" value="{{ $supervisor->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Email') }}:
        </label>
        <input type="text" id="email" name="email" value="{{ $supervisor->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 font-medium rounded-sm text-sm px-5 py-2.5 text-center">
        {{ __('Update') }}
      </button>

    </form>

  </div>


  <div class="mb-4 p-4 bg-white rounded-sm shadow-sm">

    <form action="{{ route('supervisor.update.password') }}" method="POST" autocomplete="off">

      @csrf

      <div class="mb-5">
        <label for="old-password" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Old password') }}:
        </label>
        <input type="password" id="old-password" name="old-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('New password') }}:
        </label>
        <input type="password" id="new-password" name="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <div class="mb-5">
        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Confirm password') }}:
        </label>
        <input type="password" id="confirm-password" name="confirm-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 font-medium rounded-sm text-sm px-5 py-2.5 text-center">
        {{ __('Change password') }}
      </button>

    </form>

  </div>

@endsection
