@props(['tree'])

<div class="org-bg p-8 rounded-xl">
  <div class="org-chart relative flex flex-col items-center">
    {{-- SVG overlay for dynamic connectors --}}
    <svg id="org-svg" class="absolute inset-0 w-full h-full pointer-events-none" preserveAspectRatio="none"></svg>

    {{-- CEO --}}
    <div class="mb-8 org-node" data-node="ceo" data-visible="true">
      <x-team-card :name="$tree['ceo']['name']" :role="$tree['ceo']['role']" :avatar="$tree['ceo']['avatar']" class="mx-auto" />
    </div>

    {{-- connectors to two branches --}}
    <div class="w-full flex justify-center mb-6">
      <svg class="w-full h-8" viewBox="0 0 1000 64" preserveAspectRatio="none">
        <path d="M500 0 L500 18" stroke="#9CA3AF" stroke-width="2" fill="none" stroke-linecap="round"/>
      </svg>
    </div>

    <div class="w-full flex justify-center gap-10 lg:gap-40 flex-wrap branches">
      {{-- Left branch: Operations Manager --}}
      <div class="branch flex flex-col items-center">
        <div class="org-node" data-node="operations" data-visible="false">
          <x-team-card :name="$tree['operations']['name']" :role="$tree['operations']['role']" :avatar="$tree['operations']['avatar']" />
        </div>
      </div>

      {{-- Right branch: Project Director + children --}}
      <div class="branch flex flex-col items-center">
        <div class="org-node" data-node="project_director" data-visible="false">
          <x-team-card :name="$tree['project_director']['name']" :role="$tree['project_director']['role']" :avatar="$tree['project_director']['avatar']" />
        </div>
        {{-- connector down to project manager --}}
        <div class="w-full flex justify-center mt-4 mb-6">
          <svg class="w-24 h-8" viewBox="0 0 200 64" preserveAspectRatio="xMidYMin">
            <path d="M100 0 L100 18" stroke="#9CA3AF" stroke-width="2" fill="none" stroke-linecap="round"/>
          </svg>
        </div>

        {{-- Project Manager --}}
        <div class="mb-6 org-node" data-node="project_manager" data-visible="false">
          <x-team-card :name="$tree['project_manager']['name']" :role="$tree['project_manager']['role']" :avatar="$tree['project_manager']['avatar']" />
        </div>

        {{-- Team members under project manager --}}
        <div class="w-full flex flex-wrap md:flex-nowrap justify-center gap-6 members">
          @foreach($tree['members'] as $idx => $member)
            <div class="w-40 flex-shrink-0 org-node" data-node="member-{{ $idx }}" data-visible="false">
              <x-team-card :name="$member['name']" :role="$member['role']" :avatar="$member['avatar']" />
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
