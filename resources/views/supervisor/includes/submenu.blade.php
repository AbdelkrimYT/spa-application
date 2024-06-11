<nav>

  <div class="max-w-screen-xl px-4 py-3 mx-auto">

    <div class="flex items-center">

      <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">

        <li>
          <a href="{{  route('supervisor.profile')}}" class="text-gray-900 dark:text-white hover:underline">{{ __('Profile') }}</a>
        <li>

        </li>
          <a href="{{ route('project.index') }}" class="text-gray-900 dark:text-white hover:underline">{{ __('Projects') }}</a>
        </li>

        <li>
          <a href="#" class="text-gray-900 dark:text-white hover:underline">{{ __('Students') }}</a>
        </li>

      </ul>

    </div>

  </div>

</nav>
