<nav>

  <div class="max-w-screen-xl px-4 py-3 mx-auto">

      <div class="flex items-center">

          <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">

            <li>
              <a href="{{ route('admin.profile') }}" class="text-gray-900 hover:underline">{{ __('Profile') }}</a>
            </li>

            <li>
              <a href="{{ route('specialization.index') }}" class="text-gray-900 hover:underline">{{ __('Specializations') }}</a>
            </li>

            </li>
              <a href="{{ route('supervisor.index') }}" class="text-gray-900 hover:underline">{{ __('Supervisors') }}</a>
            </li>

            <li>
              <a href="#" class="text-gray-900 hover:underline">Students</a>
            </li>

            <li>
              <a href="#" class="text-gray-900 hover:underline">Events</a>
            </li>
          </ul>

      </div>

  </div>

</nav>
