<header class="fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center space-x-3">
        <a href="/" class="flex items-center gap-3">
          <img src="/images/logo.png" alt="Larnexous" class="h-10 w-10 object-contain">
          <span class="font-semibold text-gray-800">Larnexous Solutions</span>
        </a>
      </div>
      <nav class="hidden md:flex items-center space-x-6">
        <a href="/" class="text-sm font-medium {{ request()->is('/') ? 'text-neon-green' : 'text-black' }}">Home</a>
        <a href="/services" class="text-sm font-medium {{ request()->is('services') ? 'text-neon-green' : 'text-gray-700' }} hover:text-neon-green transition">Services</a>
        <a href="{{ route('team') }}" class="text-sm font-medium {{ request()->is('team') ? 'text-neon-green' : 'text-gray-700' }} hover:text-neon-green transition">Team</a>
        <a href="/about" class="text-sm font-medium {{ request()->is('about') ? 'text-neon-green' : 'text-gray-700' }} hover:text-neon-green transition">About</a>
        <a href="{{ route('contact.show') }}" class="text-sm font-medium text-gray-700 hover:text-neon-green transition">Contact</a>
      </nav>
      <div class="flex items-center">
        <a href="#get-started" class="ml-4 inline-flex items-center px-4 py-2 rounded-full bg-neon-green text-black font-semibold hover:brightness-90 transition">Get Started</a>
        <button id="mobile-menu-button" class="md:hidden ml-3 p-2 rounded-md text-gray-700 hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div id="mobile-menu" class="md:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1 bg-white">
      <a href="/" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('/') ? 'text-neon-green' : 'text-black' }}">Home</a>
      <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('services') ? 'text-neon-green' : 'text-gray-700' }} hover:text-neon-green">Services</a>
      <a href="{{ route('team') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('team') ? 'text-neon-green' : 'text-gray-700' }} hover:text-neon-green">Team</a>
      <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('about') ? 'text-neon-green' : 'text-gray-700' }} hover:text-neon-green">About</a>
      <a href="{{ route('contact.show') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-neon-green">Contact</a>
      <a href="#get-started" class="block w-full text-center mt-2 px-4 py-2 rounded-full bg-neon-green text-black font-semibold">Get Started</a>
    </div>
  </div>

  <script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    btn && btn.addEventListener('click', () => menu.classList.toggle('hidden'));
  </script>
</header>
