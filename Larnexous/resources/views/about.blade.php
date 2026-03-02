@extends('layouts.app')

@section('content')

  <section class="pt-[100px] pb-16 bg-cover bg-center">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="p-6">
        <h2 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-black mb-4">About Us</h2>
        <p class="text-black opacity-60 w-full"> <strong>Larnexous Solutions F.Z.E</strong> is a UAE-based company delivering <strong>web design, IT consultancy, and digital marketing</strong> — with a clean, practical approach.</p>
      </div>

      <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="reveal-card card-hover-lift border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green transition-all duration-300 p-6">
          <h5 class="text-lg font-semibold mb-2">Mission</h5>
          <p class="text-[16px] text-gray-700">Help businesses grow with modern websites, smart IT decisions, and digital marketing that improves visibility and brings real results — without unnecessary complexity.</p>
        </div>

        <div class="reveal-card card-hover-lift border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green transition-all duration-300 p-6">
          <h5 class="text-lg font-semibold mb-4">Company Details</h5>

          <div class="flex items-start gap-4">
            <div class="flex flex-col items-center gap-3">
              <div class="h-[42px] w-[42px] rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green">
                <i class="fa-solid fa-location-dot text-neon-green text-[18px]"></i>
              </div>

              <div class="h-[42px] w-[42px] mt-4 rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green">
                <i class="fa-solid fa-phone text-neon-green text-[14px]"></i>
              </div>

              <div class="h-[42px] w-[42px] mt-4 rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green">
                <i class="fa-solid fa-envelope text-neon-green text-[14px]"></i>
              </div>
            </div>

            <div class="text-sm text-gray-700">
              <div class="font-semibold">Address</div>
              <div>Ajman Free Zone</div>
              <div>Office - C1 - 1F - SF4745</div>
              <div>UAE</div>

              <div class="mt-3 font-semibold">Phone</div>
              <div>+971 58 2722029</div>

              <div class="mt-3 font-semibold">Email</div>
              <div>info@larnexous-solutions.com</div>
            </div>
          </div>
        </div>
      </div>

      <div class="reveal-card card-hover-lift border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green transition-all duration-300 mt-8 p-6">
        <h5 class="text-lg font-semibold mb-4">Our approach</h5>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-sm text-gray-700">
          <div class="flex flex-col items-start">
            <div class="h-[42px] w-[42px] rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green mb-3">
              <i class="fa-solid fa-message text-neon-green text-[18px]"></i>
            </div>
            <div class="font-semibold">Clear planning</div>
            <p class="text-gray-600 mt-2">We define goals, scope, and deliverables clearly.</p>
          </div>

          <div class="flex flex-col items-start">
            <div class="h-[42px] w-[42px] rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green mb-3">
              <i class="fa-solid fa-bolt text-neon-green text-[18px]"></i>
            </div>
            <div class="font-semibold">Fast delivery</div>
            <p class="text-gray-600 mt-2">Short iterations, quick feedback, clean results.</p>
          </div>

          <div class="flex flex-col items-start">
            <div class="h-[42px] w-[42px] rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green mb-3">
              <i class="fa-solid fa-lightbulb text-neon-green text-[18px]"></i>
            </div>
            <div class="font-semibold">Continuous improvement</div>
            <p class="text-gray-600 mt-2">We refine performance, UX, and marketing over time.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
