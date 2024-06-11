@extends('admin.layouts.application')

@section('main')

  <div class="p-4 bg-white rounded-sm shadow-sm">

    <form method="POST" action="" autocomplete="off">

      <div class="mb-5">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Username') }}:
        </label>
        <input type="text" id="username" name="username" value="{{ $username }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
      </div>

    </form>

  </div>

@endsection
