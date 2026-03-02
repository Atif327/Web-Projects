@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    <!-- Left: Contact Form -->
    <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-8">
      <h2 class="text-2xl font-extrabold mb-2">Get in touch</h2>
      <p class="text-gray-600 mb-6">Send us a message and we'll get back to you shortly.</p>

      @if(session('success'))
        <div class="mb-4 p-3 rounded-lg bg-green-50 border border-green-100 text-green-800">{{ session('success') }}</div>
      @endif

      <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
          <label class="block text-sm font-medium text-gray-700">Name</label>
          <input name="name" value="{{ old('name') }}" type="text" class="mt-1 block w-full rounded-lg border-gray-200 shadow-sm focus:ring-2 focus:ring-neon-green/40 focus:border-transparent" />
          @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input name="email" value="{{ old('email') }}" type="email" class="mt-1 block w-full rounded-lg border-gray-200 shadow-sm focus:ring-2 focus:ring-neon-green/40 focus:border-transparent" />
          @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Subject</label>
          <input name="subject" value="{{ old('subject') }}" type="text" class="mt-1 block w-full rounded-lg border-gray-200 shadow-sm focus:ring-2 focus:ring-neon-green/40 focus:border-transparent" />
          @error('subject')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Message</label>
          <textarea name="message" rows="6" onresize="this.style.resize='none'" class="mt-1 block w-full rounded-lg border-gray-200 shadow-sm focus:ring-2 focus:ring-neon-green/40 focus:border-transparent">{{ old('message') }}</textarea>
          @error('message')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div class="flex items-center gap-3">
          <button type="submit" class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-gradient-to-r from-[#16a34a] to-[#39ff14] text-black font-semibold shadow hover:scale-[.997] transition">Send message</button>

          <a href="{{ route('services') }}" class="inline-flex items-center px-4 py-2 rounded-full border border-gray-200 text-gray-700 hover:border-neon-green">View services</a>
        </div>
      </form>
    </div>

    <!-- Right: Details Card -->
    <aside class="bg-white rounded-2xl border border-gray-100 shadow p-6 flex flex-col gap-4">
      <h3 class="text-lg font-bold">Contact details</h3>

      <div class="flex items-start gap-3">
        <i class="fa-solid fa-location-dot w-6 h-6 text-neon-green mt-1"></i>
        <div>
          <div class="text-sm text-gray-500">Location</div>
          <div class="font-medium">Dubai, UAE</div>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <i class="fa-regular fa-message w-6 h-6 text-neon-green mt-1"></i>
        <div>
          <div class="text-sm text-gray-500">Email</div>
          <div class="font-medium">info@yourdomain.com</div>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <i class="fa-solid fa-phone w-6 h-6 text-neon-green mt-1"></i>
        <div>
          <div class="text-sm text-gray-500">Phone</div>
          <div class="font-medium">+971 58 2722029</div>
        </div>
      </div>

      <div class="mt-4 p-4 bg-gray-50 rounded-lg border border-gray-100">
        <div class="text-sm text-gray-500">Typical response time</div>
        <div class="font-medium">Same day or next business day.</div>
      </div>

      <p class="text-xs text-gray-400 mt-auto">We respect your privacy. Your message will not be shared.</p>
    </aside>

  </div>
</div>

@endsection
