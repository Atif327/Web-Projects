
@extends('layouts.app')

@section('content')

<section class="team-reset mt-20 pb-16">
  <div class="max-w-4xl mx-auto px-0 lg:px-0" style="padding-left:32px !important;">
    <h2 class="text-4xl font-extrabold mb-4 text-left ml-0 pl-0" style="margin-left:0;padding-left:0;">Team</h2>
    <p class="text-gray-700 opacity-60 mb-6 text-left ml-0 pl-0" style="margin-left:0;padding-left:0;">Meet the people behind Larnexous Solutions.</p>
    <h5 class="text-lg font-semibold mb-8 text-left ml-0 pl-0" style="margin-left:0;padding-left:0;">Hierarchy</h5>
  </div>

  <div class="max-w-6xl mx-auto mt-6 px-4">
    @php
      // Org data (replace with DB-driven data in controller).
      $orgTree = [
        // Use supplied images for specific cards; other cards will use the site logo by default
        'ceo' => ['name' => 'MAHMOUD ELTEMSAH', 'role' => 'CEO', 'avatar' => '/images/logo.png'],
        'operations' => ['name' => 'Aziz Zawk', 'role' => 'Operations Manager', 'avatar' => '/images/aziz.jpg'],
        'project_director' => ['name' => 'Mohamad Alharakeh', 'role' => 'Project Director', 'avatar' => '/images/Mohamad Alharakeh.jpg'],
        'project_manager' => ['name' => 'Muhammad Haris', 'role' => 'Project Manager', 'avatar' => '/images/Muhammad Haris.jpg'],
        'members' => [
          ['name' => 'Aden Salah','role' => 'Graphics Designer','avatar'=>'/images/logo.png'],
          ['name' => 'Name Surname','role' => 'Video Editor','avatar'=>'/images/logo.png'],
          ['name' => 'Javeria Anwar','role' => 'Social Media Marketing','avatar'=>'/images/logo.png'],
          ['name' => 'Hafiz Muhammad Shumail','role' => 'Performance Marketer','avatar'=>'/images/logo.png'],
          ['name' => 'Haris Muhammad','role' => 'Developer','avatar'=>'/images/logo.png']
        ]
      ];
    @endphp

    <x-org-chart :tree="$orgTree" />
  </div>
</section>

@endsection
