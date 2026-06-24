<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ashaan By Aman Shah · Selected Work</title>
  <meta name="description"
    content="A selected archive of Ashaan's visual storytelling work by Aman Shah. From raw moments to refined edits." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Boldonse&family=Inter+Tight:wght@400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}?v={{ filemtime(public_path('assets/css/styles.css')) }}" />
</head>

<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header">
    <div class="container container--wide">
      <nav class="nav" aria-label="Primary">
        @php
          $headerLogo = \App\Models\SiteSetting::where('key', 'header_logo')->first();
        @endphp
        @if($headerLogo && $headerLogo->image_url)
          <a class="brand" href="{{ url('/') }}"><img src="{{ $headerLogo->image_url }}" alt="Ashaan By Aman Shah" style="max-height: 59px; width: auto;" /></a>
        @else
          <a class="brand" href="{{ url('/') }}"><span class="brand-mark" aria-hidden="true"></span> ASHAAN BY AMAN SHAH</a>
        @endif
        <div class="nav-links" role="navigation">
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('/work') }}" aria-current="page">Work</a>
          <a href="{{ url('/about') }}">About</a>
          <a href="{{ url('/services') }}">Services</a>
          <a href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="nav-cta-row">
          <a href="{{ url('/contact') }}" class="btn btn--primary btn--sm">Start a project
            <svg class="arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
              <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
          <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-drawer"><span
              aria-hidden="true"></span></button>
        </div>
      </nav>
    </div>
  </header>

  <div class="mobile-drawer" id="mobile-drawer" aria-hidden="true">
    <button class="drawer-close" aria-label="Close menu">Close</button>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/work') }}">Work</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ url('/services') }}">Services</a>
    <a href="{{ url('/contact') }}">Contact</a>
  </div>

  <main id="main">

    <!-- Hero -->
    <section class="hero">
      <div class="container container--wide">
        <div class="hero-grid">
          <div class="hero-text">
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Selected Visuals</span>
            <h1 class="hero-headline">
              Cinematic<br />
              <span class="lime">moments,</span> captured<br />
              with purpose.
            </h1>
            <p class="hero-sub">
              This is a selection of my visual storytelling work. From raw moments to refined edits, this is where my ideas come to life. Browse through my recent projects below.
            </p>
            <div class="hero-cta-row">
              <a class="btn btn--primary btn--lg" href="#featured">Featured</a>
            </div>
            <div class="hero-meta">
              <span><strong>Visual</strong> · Storytelling</span>
              <span aria-hidden="true">·</span>
              <span><strong>Emotion</strong> · Driven</span>
              <span aria-hidden="true">·</span>
              <span><strong>Cinematic</strong> · Videography</span>
            </div>
          </div>
          <div class="hero-media">
            <img src="{{ asset($settings['work_hero'] ?? 'assets/img/hero-archive.jpg') }}"
              alt="A wide editorial frame — a model in a long camel coat walking through an arched colonnade, late afternoon light cutting across the marble floor." />
            <div class="floating-tag ft-top">
              <span class="pill">Visuals</span>
              ASHAAN BY AMAN SHAH
            </div>
            <div class="floating-tag ft-bottom">
              Calicut, Kerala
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Filters -->
    <section class="compact" id="featured">
      <div class="container container--wide">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Portfolio</span>
            <h2>My creative<br />archive.</h2>
          </div>
          <p class="lede">
            Browse by category to explore my recent work across different styles, from commercial campaigns to personal documentary projects.
          </p>
        </div>

        <div class="center-row" id="work-filters" style="flex-wrap: wrap; gap: var(--space-3); margin-bottom: var(--space-7);">
          <button class="btn btn--primary btn--sm filter-btn" data-filter="all">All · {{ $works->count() }}</button>
          @foreach($categories as $category)
            @if($category->works_count > 0)
              <button class="btn btn--ghost btn--sm filter-btn" data-filter="{{ $category->slug }}">{{ $category->name }} · {{ $category->works_count }}</button>
            @endif
          @endforeach
        </div>
      </div>
    </section>

    <!-- Featured grid -->
    <section style="padding-top: 0;">
      <div class="container container--wide">
        <div class="work-grid">
          @php $sizes = ['xl', 'sm', 'md', 'md', 'sm', 'lg', 'sm', 'md', 'md', 'lg', 'sm', 'sm']; $i = 0; @endphp
          @foreach($works as $work)
          <a class="work-item work-item--{{ $sizes[$i % count($sizes)] }} reveal" href="#">
            <div class="wm">
              <img src="{{ $work->image_url }}"
                alt="{{ $work->title }}" />
              <span class="wm-pill">{{ $work->category->name }}</span>
              <span class="wm-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M3 11L11 3M11 3H5M11 3V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg></span>
            </div>
            <div class="work-meta">
              <div>
                <div class="wm-title">{{ $work->title }}</div>
                <div class="wm-cap">{{ $work->description }}</div>
              </div>
              <div class="wm-cap">{{ $work->project_no }}</div>
            </div>
          </a>
          @php $i++; @endphp
          @endforeach
        </div>
      </div>
    </section>

    <!-- Case-study chapter -->
    <section class="chapter tile-section">
      <div class="container container--narrow">
        <div class="chapter-grid">
          <div>
            <span class="label">Behind the scenes</span>
            <h2>The story<br />behind the<br />visuals.</h2>
          </div>
          <div class="chapter-body">
            <p>
              Every great frame is the result of careful planning, creative problem-solving, and a deep understanding of light and emotion. Whether I'm shooting a high-energy commercial on the streets of Kerala or an intimate portrait session, the goal is always to create something that feels authentic.
            </p>
            <blockquote class="pull-quote">
              I don't just capture what's in front of the lens; I capture the feeling in the room.
              <cite>— Aman Shah, Founder of Ashaan</cite>
            </blockquote>
            <p>
              I believe in keeping my setup agile and my approach honest. Sometimes that means using natural daylight and a single reflector; other times it means carefully shaping the light with multiple strobes. The technique always serves the story.
            </p>
            <a class="btn btn--ghost-on-tile btn--lg" href="about.html">Read more about my approach
              <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- Closing CTA -->
    <section class="closing-cta">
      <div class="container container--narrow">
        <span class="label" style="color: rgba(10,10,12,0.6);">Let's Collaborate</span>
        <h2>See something<br />you would like<br />me to make next?</h2>
        <p class="lede">
          Tell me about your vision — share your moodboard, references, and working dates. I will get back to you to discuss availability and scope.
        </p>
        <div class="cta-row">
          <a class="btn btn--dark btn--lg" href="{{ url('/contact') }}">Start a project
            <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
              <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
          <a class="btn btn--ghost btn--lg" href="{{ url('/services') }}">See rates &amp; process</a>
        </div>
      </div>
    </section>

  </main>

  @include('partials.footer')

  <script src="assets/js/site.js" defer></script>
</body>

</html>