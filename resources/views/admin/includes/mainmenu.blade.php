<nav class="bg-red-600 shadow-lg">

  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">

    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">SPA</span>
    </a>

    <div class="flex items-center space-x-6 rtl:space-x-reverse">
      <a href="{{ route('admin.logout') }}" class="text-sm  text-white hover:underline">Logout</a>
    </div>

  </div>

</nav>
