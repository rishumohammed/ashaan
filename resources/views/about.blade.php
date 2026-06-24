<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ashaan By Aman Shah · About</title>
  <meta name="description" content="Welcome to Ashaan. My name is Aman Shah, and I am based in Calicut. I am a videographer who is deeply passionate about turning real moments into cinematic stories." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Boldonse&family=Inter+Tight:wght@400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" />
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
          <a href="{{ url('/work') }}">Work</a>
          <a href="{{ url('/about') }}" aria-current="page">About</a>
          <a href="{{ url('/services') }}">Services</a>
          <a href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="nav-cta-row">
          <a href="{{ url('/contact') }}" class="btn btn--primary btn--sm">Start a project
            <svg class="arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true"><path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-drawer"><span aria-hidden="true"></span></button>
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
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Calicut · Kerala</span>
            <h1 class="hero-headline">
              A passion for<br />
              cinematic<br />
              <span class="lime">storytelling.</span>
            </h1>
            <p class="hero-sub">
              Welcome to Ashaan. My name is Aman Shah, and I am based in Calicut. I am a videographer who is deeply passionate about turning real moments into cinematic stories. What started out as a simple interest in capturing everyday scenes has grown into a dedicated creative journey.
            </p>
            <div class="hero-cta-row">
              <a class="btn btn--primary btn--lg" href="{{ url('/contact') }}">Start a project</a>
              <a class="btn btn--ghost btn--lg" href="{{ url('/work') }}">See my work</a>
            </div>
            <div class="hero-meta">
              <span><strong>Calicut</strong> · base</span>
              <span aria-hidden="true">·</span>
              <span><strong>Worldwide</strong> · available to travel</span>
            </div>
          </div>
          <div class="hero-media">
            <img src="{{ asset($settings['studio_hero'] ?? 'assets/img/studio-hero.jpg') }}" alt="Ashaan By Aman Shah" />
            <div class="floating-tag ft-top">
              <span class="pill">Base</span>
              CALICUT · KERALA
            </div>
            <div class="floating-tag ft-bottom">
              Visual Storyteller
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Founding chapter -->
    <section class="chapter">
      <div class="container container--narrow">
        <div class="chapter-grid">
          <div>
            <span class="label">Chapter 01 · Origin</span>
            <h2>How it all<br />started in<br />Calicut.</h2>
          </div>
          <div class="chapter-body">
            <p>
              My creative journey began with a simple desire to document the world around me. Working out of Calicut, Kerala, what started as a passion quickly evolved into a dedicated career in visual storytelling and videography. Over the years, I've had the privilege of working with a variety of clients to bring their stories to life.
            </p>
            <blockquote class="pull-quote">
              Every frame should tell a story, and every edit should evoke an emotion.
              <cite>— Aman Shah, Founder of Ashaan</cite>
            </blockquote>
            <p>
              My creative focus spans across several styles, specializing in fashion, street, baby, and wedding photography. I believe that every project, whether a commercial campaign or a personal documentary, deserves the same level of care and artistic integrity.
            </p>
            <p>
              Operating as an independent creator allows me to remain fully engaged with every aspect of the process, from the initial concept to the final color grade. This ensures a consistent vision and a highly personal touch on every project I undertake.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Principles -->
    <section>
      <div class="container container--wide">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>My Approach</span>
            <h2>Principles that<br />guide my work.</h2>
          </div>
          <p class="lede">
            These are not just aspirations — they are the core beliefs that shape every shoot I produce. From the way I light a scene to how I color grade the final cut, these rules define my aesthetic.
          </p>
        </div>

        <div class="cap-bento">
          <article class="cap-card cap-card--std">
            <span class="cap-num">01</span>
            <h3>Authentic Emotion.</h3>
            <p>Visuals should feel real. I prioritize genuine moments over heavily staged scenarios, allowing the true emotion of the subject to shine through.</p>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">02</span>
            <h3>Cinematic Lighting.</h3>
            <p>Light is the foundation of any good frame. Whether I am using available daylight or carefully crafted studio lights, I shape it to fit the mood of the story.</p>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">03</span>
            <h3>Personal Collaboration.</h3>
            <p>When you work with me, you communicate directly with the creator. This ensures your vision is understood and executed without being lost in translation.</p>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">04</span>
            <h3>The Edit is Everything.</h3>
            <p>I handle all my own post-production. Retouching, color grading, and editing are treated as integral parts of the creative process, never outsourced.</p>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">05</span>
            <h3>Attention to Detail.</h3>
            <p>I shoot enough of every setup to find the perfect frame. I never settle for the safest option if there's an opportunity to create something extraordinary.</p>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">06</span>
            <h3>Pride in the Final Product.</h3>
            <p>I refuse to deliver a project that I wouldn't proudly display in my own portfolio. Quality and artistic integrity always come first.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Closing -->
    <section class="closing-cta">
      <div class="container container--narrow">
        <span class="label" style="color: rgba(10,10,12,0.6);">Booking &amp; Availability</span>
        <h2>Looking for a<br />videographer?</h2>
        <p class="lede">
          I am currently accepting new projects for the upcoming season. Whether you need a wedding covered, a commercial campaign shot, or a personal portrait session, I'd love to hear from you.
        </p>
        <div class="cta-row">
          <a class="btn btn--dark btn--lg" href="{{ url('/contact') }}">Start a project
            <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true"><path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a class="btn btn--ghost btn--lg" href="{{ url('/contact') }}">Contact me</a>
        </div>
      </div>
    </section>

  </main>

  @include('partials.footer')

  <script src="assets/js/site.js" defer></script>
</body>
</html>