@extends('layouts.app')

@section('content')

  <section class="min-h-screen pt-[100px] pb-20 bg-cover bg-center bg-fixed">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="bg-transparent p-6">
        <h2 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-black mb-4">Digital Marketing Services</h2>
        <p class="text-black text-opacity-80 max-w-2xl">Explore our full service catalog. Click any category to view sub-services and details.</p>
      </div>
      
      <div class="mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Strategy & Planning</h5>
            <p class="text-[16px] text-gray-700 mb-3">Planning and decision-making to build a clear marketing roadmap with measurable targets.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Digital marketing strategy</li>
              <li>Brand positioning & messaging</li>
              <li>Customer personas & journey mapping</li>
              <li>Market & competitor analysis</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold cta-micro">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Website & Conversion Optimization</h5>
            <p class="text-[16px] text-gray-700 mb-3">Improve website experience, speed, and conversion rate so more visitors become leads or customers.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Website design & redesign</li>
              <li>Landing page creation</li>
              <li>Conversion Rate Optimization (CRO)</li>
              <li>UX/UI optimization</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold cta-micro">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Search Engine Optimization (SEO)</h5>
            <p class="text-[16px] text-gray-700 mb-3">Rank higher on Google through technical fixes, content improvements, and local SEO authority.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>On-Page SEO</li>
              <li>Keyword research</li>
              <li>Content optimization</li>
              <li>Meta tags & schema</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold cta-micro">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Paid Advertising (PPC & Media Buying)</h5>
            <p class="text-[16px] text-gray-700 mb-3">Launch and optimize paid campaigns to generate leads, sales, and measurable ROI.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Google Ads (Search, Display, Shopping, YouTube)</li>
              <li>Meta Ads (Facebook & Instagram)</li>
              <li>TikTok Ads</li>
              <li>LinkedIn Ads</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Social Media Marketing</h5>
            <p class="text-[16px] text-gray-700 mb-3">Build brand presence and grow results through organic content + paid social campaigns.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Social media strategy</li>
              <li>Content calendars</li>
              <li>Post creation (graphics, captions, reels)</li>
              <li>Community management</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Content Marketing & Copywriting</h5>
            <p class="text-[16px] text-gray-700 mb-3">Content that ranks, sells, and builds trust across web, email, and ads.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Content strategy</li>
              <li>Blog & SEO articles</li>
              <li>Website & sales copy</li>
              <li>Email copywriting</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Email & CRM Marketing</h5>
            <p class="text-[16px] text-gray-700 mb-3">Automations and funnels that nurture leads, increase repeat sales, and improve retention.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Email marketing strategy</li>
              <li>Newsletters</li>
              <li>Automated email sequences</li>
              <li>Lead nurturing funnels</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Analytics, Tracking & Reporting</h5>
            <p class="text-[16px] text-gray-700 mb-3">Track what matters and get clear reporting so decisions are based on real data.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Google Analytics (GA4) setup</li>
              <li>Google Tag Manager</li>
              <li>Conversion & event tracking</li>
              <li>Custom dashboards</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">E-commerce Marketing</h5>
            <p class="text-[16px] text-gray-700 mb-3">Improve store performance through product optimization, ads, and recovery funnels.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>E-commerce strategy</li>
              <li>Product page optimization</li>
              <li>Shopping ads</li>
              <li>Abandoned cart recovery</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Branding & Creative Services</h5>
            <p class="text-[16px] text-gray-700 mb-3">Visual identity and creative assets that look premium and perform in marketing.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Brand identity development</li>
              <li>Logo design</li>
              <li>Visual brand guidelines</li>
              <li>Ad creatives (static & video)</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Influencer & Partnership Marketing</h5>
            <p class="text-[16px] text-gray-700 mb-3">Partnership campaigns that boost trust, reach, and conversions.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Influencer sourcing & outreach</li>
              <li>Campaign management</li>
              <li>Affiliate marketing setup</li>
              <li>Performance tracking</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Automation & AI Marketing</h5>
            <p class="text-[16px] text-gray-700 mb-3">Automate workflows and improve conversions using smart systems and integrations.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Marketing automation workflows</li>
              <li>AI chatbots</li>
              <li>Lead scoring automation</li>
              <li>CRM & system integrations</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Reputation & Trust Management</h5>
            <p class="text-[16px] text-gray-700 mb-3">Protect your brand online and build trust through reviews and monitoring.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Online review management</li>
              <li>Reputation monitoring</li>
              <li>Testimonial strategy</li>
              <li>Crisis response support</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Training & Consulting</h5>
            <p class="text-[16px] text-gray-700 mb-3">Upskill your team and get strategic consulting to improve marketing performance.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Digital marketing consulting</li>
              <li>In-house team training</li>
              <li>Workshops & seminars</li>
              <li>One-to-one coaching</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

          <x-card class="p-6">
            <h5 class="text-lg font-semibold mb-2">Lead Generation (Core Service)</h5>
            <p class="text-[16px] text-gray-700 mb-3">Lead generation systems for B2B & B2C, combining ads, landing pages, tracking, and nurturing.</p>
            <ul class="list-disc pl-5 space-y-1 text-[14px] text-gray-600 mb-3">
              <li>Lead generation strategy (B2B & B2C)</li>
              <li>Funnel & offer creation</li>
            </ul>
            <a href="#" class="text-neon-green font-semibold">View details</a>
          </x-card>

        </div>
      </div>
    </div>
  </section>

@endsection
