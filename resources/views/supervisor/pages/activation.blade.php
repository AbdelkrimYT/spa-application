@extends('supervisor.layouts.widget')

@section('main')

  <div class="p-4 bg-white rounded-sm shadow-sm">

    <form action="{{ route('account.supervisor.activation') }}" method="POST" autocomplete="off">
	  
	  @csrf
	  
      <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Password') }}:
        </label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>
	  
      <div class="mb-5">
        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">
          {{ __('Confirm password') }}:
        </label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
      </div>

      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-sm text-sm px-5 py-2.5 me-2 mb-2">
        {{ __('Submit') }}
      </button>

    </form>

  </div>

@endsection
