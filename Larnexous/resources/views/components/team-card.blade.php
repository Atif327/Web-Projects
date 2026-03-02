<div {{ $attributes->merge(['class' => 'org-card group bg-white/90 rounded-lg p-4 flex flex-col items-center text-center shadow-sm transition-transform transform hover:scale-105 hover:shadow-lg']) }}>
  <img src="{{ $avatar ?? '/images/logo.png' }}" alt="{{ $name }}" class="h-20 w-20 rounded-full object-cover soft-shadow mb-3" />
  <div class="text-sm">
    <div class="font-semibold text-gray-900">{{ $name }}</div>
    <div class="text-xs text-gray-500">{{ $role }}</div>
  </div>
</div>
