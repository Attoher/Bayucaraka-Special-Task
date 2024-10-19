<nav class="sticky top-0 z-40 shadow-xl" style="background-color: rgba(30, 35, 40, var(--tw-bg-opacity));" x-data="{ isOpen: false, newsDropdown: false }">
  <div class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center h-24 justify-between">
      <div class="flex items-center flex-shrink-0">
        <a href="/" class="flex items-center space-x-3">
          <img class="h-20 w-20" src="img/logos.webp" alt="Your Company">
          <h1 class="text-white text-2xl font-semibold">Bayucaraka</h1>
        </a>
      </div>

      <div class="hidden md:flex flex-grow justify-center space-x-8">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>

        <div class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="inline-flex items-center px-4 py-3 text-gray-300 hover:text-yellow-400">
            Division
            <svg class="ml-1 h-5 w-5 fill-current text-gray-300" viewBox="0 0 20 20">
              <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
            </svg>
          </button>
          <div x-show="open" @click.away="open = false" class="absolute right-0 z-10 w-48 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="py-1" role="menu">
              <a href="/rp" class="block px-5 py-3 text-gray-700 hover:text-yellow-400">Racing Plane</a>
              <a href="/fw" class="block px-5 py-3 text-gray-700 hover:text-yellow-400">Fixed Wings</a>
              <a href="/VTOL" class="block px-5 py-3 text-gray-700 hover:text-yellow-400">VTOL</a>
              <a href="/td" class="block px-5 py-3 text-gray-700 hover:text-yellow-400">Technology Development</a>
              <a href="/official" class="block px-5 py-3 text-gray-700 hover:text-yellow-400">Official</a>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden md:flex">
        <a href="/support-us" class="ml-auto inline-flex items-center px-1 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#ffa51d] hover:bg-stone-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Support Us
        </a>
      </div>

      <div class="-mr-2 flex md:hidden">
        <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div x-show="isOpen" class="md:hidden" id="mobile-menu">
    <div class="flex flex-col space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
      <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
      
      <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="w-full text-left block rounded-md px-3 py-3 text-base font-medium text-gray-300 hover:text-yellow-400 items-center justify-between">
          Division
          <svg class="inline-block ml-2 h-5 w-5 fill-current" viewBox="0 0 20 20">
            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
          </svg>
        </button>
        <div x-show="open" class="pl-4 mt-1 space-y-1">
          <a href="/rp" class="block rounded-md px-3 py-3 text-base font-medium text-gray-300 hover:text-yellow-400">Racing Plane</a>
          <a href="/fw" class="block rounded-md px-3 py-3 text-base font-medium text-gray-300 hover:text-yellow-400">Fixed Wings</a>
          <a href="/VTOL" class="block rounded-md px-3 py-3 text-base font-medium text-gray-300 hover:text-yellow-400">VTOL</a>
          <a href="/td" class="block rounded-md px-3 py-3 text-base font-medium text-gray-300 hover:text-yellow-400">Technology Development</a>
          <a href="/official" class="block rounded-md px-3 py-3 text-base font-medium text-gray-300 hover:text-yellow-400">Official</a>
        </div>
      </div>
      
      <a href="/support-us" class="block rounded-md px-3 py-3 text-base font-medium text-white bg-[#ffa51d] hover:bg-stone-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-center">
        Support Us
      </a>
    </div>
  </div>   
</nav>
