@extends('admin.layouts.application')

@section('main')

  <div class="p-4 bg-white rounded-sm shadow-sm">

    <div class="flex flex-column flex-wrap space-y-4 items-center justify-between pb-4">

      <a href="{{ route('supervisor.create') }}" class="text-white text-sm bg-red-600 hover:bg-red-800 focus:ring-red-300 font-medium rounded-sm px-5 py-2.5">
        {{ __('New') }}
      </a>

    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500">

      <thead class="text-xs text-gray-700 uppercase bg-gray-50">

        <tr>
          <th class="px-6 py-3">
            {{ __('Name') }}
          </th>

          <th scope="col" class="px-6 py-3">
            {{ __('Email') }}
          </th>

          <th scope="col" class="px-6 py-3">
            {{ __('Status') }}
          </th>

        </tr>

      </thead>

      <tbody>

        @foreach ($supervisors as $supervisor)

        <tr>

          <th scope="row" class="px-6 py-4">
            {{ $supervisor->name }}
          </th>

          <td class="px-6 py-4">
            <a href="{{ route('supervisor.edit', $supervisor) }}" class="hover:underline">{{ $supervisor->email }}</a>
          </td>

          <td class="px-6 py-4">

            @if ($supervisor->is_activated)
              <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm">
                {{ __('Activated') }}
              </span>
            @else
              <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm">
                {{ __('Deactivate') }}
              </span>
            @endif

          </td>
        </tr>

        @endforeach

      </tbody>

    </table>

  </div>

@endsection
