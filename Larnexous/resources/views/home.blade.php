@extends('layouts.app')

@section('content')

  <section class="relative min-h-screen bg-center bg-cover bg-[url('/images/hero.jpg')]">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 flex items-center min-h-screen">
      <div class="w-full lg:w-2/3 text-left text-white">
        <p class="text-sm uppercase tracking-wide text-gray-200 mb-2 animate-fade-in">Larnexous Solutions • UAE</p>
        <h2 class="asym-hero text-5xl lg:text-6xl font-extrabold leading-tight mb-4 animate-fade-in">Web Design</h2>

        <!-- Decorative brand text removed as requested -->

        <p class="max-w-xl text-gray-200 mb-8 animate-fade-in">Responsive, fast, and premium websites built to convert visitors into leads.</p>

        <div class="flex items-center gap-6">
          <a href="#services" class="inline-block px-4 py-2 border border-white/30 rounded-lg bg-neon-green text-black font-semibold hover:brightness-95 transition explore cta-micro">Explore Services</a>

          <a href="#highlights" class="inline-block px-4 py-2 border border-white/30 rounded-lg text-gray-200 hover:border-neon-green hover:text-neon-green transition cta-micro">See highlights</a>
        </div>
      </div>

      <div class="hidden lg:flex lg:w-1/3 items-center justify-center">
        <img src="/images/hero-logo.png" alt="hero logo" class="h-44 w-auto opacity-90">
      </div>

      

    </div>
  </section>

  <section id="services" class="py-24 lg:py-28 bg-cover bg-center relative">
    <div class="absolute inset-0"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
      <h2 class="text-4xl sm:text-5xl font-extrabold mb-4">Services</h2>

      <div class="relative mb-6">
        <p class="text-gray-500">Browse our main categories. Click a card to see sub-services and details.</p>

        <a href="{{ route('services') }}" class="absolute right-5 top-1/2 -translate-y-1/2 px-4 py-2 rounded-lg border border-gray-300 bg-transparent text-neon-green hover:border-neon-green transition duration-300">View all services</a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-5">
        <x-card class="p-6">
          <h4 class="text-xl font-bold mb-3">Paid Advertising</h4>
          <p class="text-gray-600 mb-4">Google, Meta, TikTok &amp; LinkedIn campaigns with retargeting and scaling.</p>
          <a href="#" class="text-neon-green font-semibold">View details</a>
        </x-card>

        <x-card class="p-6">
          <h4 class="text-xl font-bold mb-3">Social Media Marketing</h4>
          <p class="text-gray-600 mb-4">Organic content strategy plus paid social advertising for growth.</p>
          <a href="#" class="text-neon-green font-semibold">View details</a>
        </x-card>

        <x-card class="p-6">
          <h4 class="text-xl font-bold mb-3">Lead Generation</h4>
          <p class="text-gray-600 mb-4">Funnels, landing pages, tracking, routing, nurturing, and ROI reporting.</p>
          <a href="#" class="text-neon-green font-semibold">View details</a>
        </x-card>
      </div>
    </div>
  </section>

  <section class="py-24 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="mt-20 flex flex-col lg:flex-row lg:items-start lg:gap-8">
        <div class="w-full lg:w-1/2">
          <h1 class="text-5xl sm:text-6xl mb-4">Measured growth, not guessing</h1>

          <p class="text-gray-500">We focus on clean execution and clear reporting, so you can see progress and make better decisions.</p>
        </div>

        <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
          <div class="grid grid-cols-2 gap-4">
            <x-card class="p-4 flex items-start">
              <div class="flex items-center gap-4">
                <div class="h-[52px] w-[52px] rounded-full bg-neon-green/20 flex items-center justify-center text-black font-bold text-2xl">
                  <span class="stat-counter" data-target="23" data-duration="2200">0</span><span class="stat-plus">+</span>
                </div>
                <div>
                  <h3 class="sr-only">23+</h3>
                  <p class="text-gray-600">Projects delivered.</p>
                </div>
              </div>
            </x-card>

            <x-card class="p-4 flex items-start">
              <div class="flex items-center gap-4">
                <div class="h-[52px] w-[52px] rounded-full bg-neon-green/20 flex items-center justify-center text-black font-bold text-2xl">
                  <span class="stat-counter" data-target="12" data-duration="2200">0</span><span class="stat-plus">+</span>
                </div>
                <div>
                  <h3 class="sr-only">12+</h3>
                  <p class="text-gray-600">Clients supported.</p>
                </div>
              </div>
            </x-card>

            <x-card class="p-4 flex items-start">
              <div class="flex items-center gap-4">
                <div class="h-[52px] w-[52px] rounded-full bg-neon-green/20 flex items-center justify-center text-black font-bold text-2xl">
                  <span class="stat-counter" data-target="10" data-duration="2200">0</span><span class="stat-plus">+</span>
                </div>
                <div>
                  <h3 class="sr-only">10+</h3>
                  <p class="text-gray-600">Active campaigns</p>
                </div>
              </div>
            </x-card>

            <x-card class="p-4 flex items-start">
              <div class="flex items-center gap-4">
                <div class="h-[52px] w-[52px] rounded-full bg-neon-green/20 flex items-center justify-center text-black font-bold text-2xl">
                  <span class="stat-counter" data-target="2" data-duration="2200">0</span><span class="stat-plus">+</span>
                </div>
                <div>
                  <h3 class="sr-only">2+</h3>
                  <p class="text-gray-600">Years experience</p>
                </div>
              </div>
            </x-card>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 lg:py-28 bg-cover bg-center relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="absolute inset-0"></div>
      <div class="relative z-10 mt-20 flex flex-col lg:flex-row lg:items-center lg:gap-8">
        <div class="w-full lg:w-1/2 flex items-center">
          <div>
            <h2 class="text-4xl sm:text-5xl font-extrabold mb-4">How we work</h2>
            <p class="text-gray-500">Simple process. Clear steps. Clean delivery. We keep communication short and practical.</p>
          </div>
        </div>

        <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
          <div class="space-y-4">
            <x-card class="p-4 flex items-start gap-3 bg-white">
              <div class="h-12 w-12 rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green font-bold">1</div>
              <div>
                <p class="font-bold">Discovery</p>
                <p class="text-gray-600 mt-2">Goals, audience, offer, and what “done” looks like.</p>
              </div>
            </x-card>

            <x-card class="p-4 flex items-start gap-3 bg-white">
              <div class="h-12 w-12 rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green font-bold">2</div>
              <div>
                <p class="font-bold">Build</p>
                <p class="text-gray-600 mt-2">Design, setup, content, tracking, and quick iteration.</p>
              </div>
            </x-card>

            <x-card class="p-4 flex items-start gap-3 bg-white">
              <div class="h-12 w-12 rounded-lg bg-neon-green/20 flex items-center justify-center text-neon-green font-bold">3</div>
              <div>
                <p class="font-bold">Launch &amp; optimize</p>
                <p class="text-gray-600 mt-2">QA, go-live, testing, and ongoing improvements based on data.</p>
              </div>
            </x-card>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-20">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-3">Testimonials</h1>
      <p class="text-gray-500 opacity-80 mb-8">Simple delivery, clear communication, and measurable improvement.</p>

      <div class="flex gap-6 flex-nowrap">
            <x-card class="basis-1/3 flex-none p-6">
          <h4 class="text-sm text-gray-500 mb-2">Marketing</h4>
          <p class="text-gray-700 text-sm mb-4">Clear plan, fast execution, and consistent reporting. We finally understand what’s working.</p>

          <div class="flex items-center gap-4 mt-4">
            <div class="h-10 w-10 rounded-full bg-neon-green/20 flex items-center justify-center text-neon-green font-bold">C</div>
            <div>
              <p class="font-bold">C. Martin</p>
              <p class="text-sm text-gray-500">Ireland</p>
            </div>
          </div>
        </x-card>

          <x-card class="basis-1/3 flex-none p-6">
          <h4 class="text-sm text-gray-500 mb-2">Web design</h4>
          <p class="text-gray-700 text-sm mb-4">The website looks premium, loads fast, and converts better. Clean and professional.</p>

          <div class="flex items-center gap-4 mt-4">
            <div class="h-10 w-10 rounded-full bg-neon-green/20 flex items-center justify-center text-neon-green font-bold">K</div>
            <div>
              <p class="font-bold">K. Nasser</p>
              <p class="text-sm text-gray-500">UAE</p>
            </div>
          </div>
        </x-card>

          <x-card class="basis-1/3 flex-none p-6">
          <h4 class="text-sm text-gray-500 mb-2">Consultancy</h4>
          <p class="text-gray-700 text-sm mb-4">Practical advice and quick fixes that improved our setup immediately. No unnecessary complexity.</p>

          <div class="flex items-center gap-4 mt-4">
            <div class="h-10 w-10 rounded-full bg-neon-green/20 flex items-center justify-center text-neon-green font-bold">S</div>
            <div>
              <p class="font-bold">S. George</p>
              <p class="text-sm text-gray-500">Cyprus</p>
            </div>
          </div>
        </x-card>
      </div>
      <div class="mt-6 flex justify-center w-full">
          <a href="{{ route('contact.show') }}" class="inline-block w-[400px] max-w-full px-4 py-2 rounded-lg border border-gray-300 bg-neon-green text-black font-semibold hover:brightness-95 transition duration-300 text-center mx-auto">Request a quote</a>
        </div>
    </div>
  </section>

  <section class="py-24 lg:py-28 bg-cover bg-center relative ">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-[20px] lg:items-center">
        <div class="lg:col-span-2 flex flex-col justify-center">
          <h1 class="text-4xl sm:text-5xl font-extrabold mb-3">FAQ</h1>
          <p class="text-gray-500 opacity-80">Common questions about delivery, timelines, and reporting.</p>
        </div>

        <div class="lg:col-span-3 mt-6 lg:mt-0 pl-[20px]">
          <div class="space-y-4 ">
            <div class="reveal-card accordion-item w-full p-4 border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green hover:shadow-lg transition-shadow transition-colors transition-all duration-300">
              <div class="accordion-header flex items-center justify-between hover:bg-neon-green/10 transition-colors rounded-lg">
                <div class="font-medium">How quickly can we start?</div>
                <button type="button" class="answer-toggle p-2 rounded text-neon-green" aria-expanded="false">
                  <svg class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
              </div>
              <div class="accordion-content hidden mt-4 bg-white p-4 text-gray-700">Typically within a few days after confirming scope. We start with discovery and access setup.</div>
            </div>

            <div class="reveal-card accordion-item w-full p-4 border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green hover:shadow-lg transition-shadow transition-colors transition-all duration-300">
              <div class="accordion-header flex items-center justify-between hover:bg-neon-green/10 transition-colors rounded-lg">
                <div class="font-medium">Do you provide monthly reporting?</div>
                <button type="button" class="answer-toggle p-2 rounded text-neon-green" aria-expanded="false">
                  <svg class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
              </div>
              <div class="accordion-content hidden mt-4 bg-white p-4 text-gray-700">Yes, we provide KPI-based reporting with clear next steps and priorities for improvement.</div>
            </div>

            <div class="reveal-card accordion-item w-full p-4 border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green hover:shadow-lg transition-shadow transition-colors transition-all duration-300">
              <div class="accordion-header flex items-center justify-between hover:bg-neon-green/10 transition-colors rounded-lg">
                <div class="font-medium">Can you improve an existing website?</div>
                <button type="button" class="answer-toggle p-2 rounded text-neon-green" aria-expanded="false">
                  <svg class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
              </div>
              <div class="accordion-content hidden mt-4 bg-white p-4 text-gray-700">Yes, redesign, performance fixes, CRO improvements, and SEO basics can be applied to your current site.</div>
            </div>

            <div class="reveal-card accordion-item w-full p-4 border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green hover:shadow-lg transition-shadow transition-colors transition-all duration-300">
              <div class="accordion-header flex items-center justify-between hover:bg-neon-green/10 transition-colors rounded-lg">
                <div class="font-medium">Do you track leads and WhatsApp clicks?</div>
                <button type="button" class="answer-toggle p-2 rounded text-neon-green" aria-expanded="false">
                  <svg class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
              </div>
              <div class="accordion-content hidden mt-4 bg-white p-4 text-gray-700">Yes, we can track forms, calls, WhatsApp clicks, bookings, and key events using GA4 and Tag Manager.</div>
            </div>

            <div class="reveal-card accordion-item w-full p-4 border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-neon-green hover:shadow-lg transition-shadow transition-colors transition-all duration-300">
              <div class="accordion-header flex items-center justify-between hover:bg-neon-green/10 transition-colors rounded-lg">
                <div class="font-medium">Can you work with our in-house team?</div>
                <button type="button" class="answer-toggle p-2 rounded text-neon-green" aria-expanded="false">
                  <svg class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
              </div>
              <div class="accordion-content hidden mt-4 bg-white p-4 text-gray-700">Yes, we can support your team with planning, implementation help, or consulting and training.</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const toggles = document.querySelectorAll('.answer-toggle');

        function closeAll() {
          document.querySelectorAll('.accordion-content').forEach(c => c.classList.add('hidden'));
          document.querySelectorAll('.accordion-header').forEach(it => it.classList.remove('bg-neon-green/10'));
          document.querySelectorAll('.answer-toggle').forEach(t => t.setAttribute('aria-expanded', 'false'));
          document.querySelectorAll('.answer-toggle svg').forEach(svg => svg.classList.remove('rotate-180'));
        }

        toggles.forEach(toggle => {
          toggle.addEventListener('click', function () {
            const item = toggle.closest('.accordion-item');
            const content = item.querySelector('.accordion-content');
            const isOpen = !content.classList.contains('hidden');

            closeAll();

            if (!isOpen) {
              content.classList.remove('hidden');
              const header = item.querySelector('.accordion-header');
              if (header) header.classList.add('bg-neon-green/10');
              toggle.setAttribute('aria-expanded', 'true');
              const svg = toggle.querySelector('svg');
              if (svg) svg.classList.add('rotate-180');
            }
          });
        });
      });
    </script>
  </section>

  <section class="py-24 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-20">
      <div class="bg-gradient-to-r from-[#C1F5DD] via-white to-[#C1F5DD] rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
          <div class="w-full lg:w-[770px]">
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">Ready to grow your business online?</h2>
            <p class="text-gray-800">Tell us what you need and we’ll reply with a clear plan, timeline, and next steps.</p>
          </div>

          <div class="w-full lg:w-[383px] flex flex-col gap-4 mt-6 lg:mt-0">
            <a href="{{ route('contact.show') }}" class="inline-block w-[400px] max-w-full px-4 py-2 rounded-lg border border-gray-300 bg-neon-green text-black font-semibold hover:brightness-95 transition duration-300 text-center">Contact us</a>
            <a href="#services" class="inline-block w-[400px] max-w-full px-4 py-2 rounded-lg border border-gray-300 bg-transparent text-neon-green font-semibold hover:border-neon-green hover:text-neon-green transition duration-300 text-center">View services</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  

@endsection

