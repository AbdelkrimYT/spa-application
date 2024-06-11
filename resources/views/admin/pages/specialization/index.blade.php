@extends('admin.layouts.application')

@section('main')

  <div class="p-4 bg-white rounded-sm shadow-sm">

    <div class="flex flex-column flex-wrap space-y-4 items-center justify-between pb-4">

      <a href="{{ route('specialization.create') }}" class="text-white text-sm bg-red-600 hover:bg-red-800 focus:ring-red-300 font-medium rounded-sm px-5 py-2.5">
        {{ __('New') }}
      </a>

    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500">

      <thead class="text-xs text-gray-700 uppercase bg-gray-50">

        <tr>
          <th class="px-6 py-3">
            {{ __('Level') }}
          </th>

          <th scope="col" class="px-6 py-3">
            {{ __('Title') }}
          </th>

          <th scope="col" class="px-6 py-3">
            {{ __('Actions') }}
          </th>

        </tr>

      </thead>

      <tbody>

        @foreach ($specializations as $specialization)

          <tr>

            <th scope="row" class="px-6 py-4">
              {{ $specialization->level }}
            </th>

            <td class="px-6 py-4">
              {{ $specialization->title }}
            </td>

            <td class="px-6 py-4">

              <a href="{{ route('specialization.edit', $specialization) }}" class="font-medium hover:underline">{{ __('Edit') }}</a>

              <form method="POST" action="{{ route('specialization.destroy', $specialization) }}" class="inline-flex">

                @csrf
                @method('DELETE')

                <button type="submit" class="font-medium hover:underline">{{ __('Delete') }}</button>

              </form>

            </td>

          </tr>

        @endforeach

      </tbody>

    </table>


  </div>

@endsection
