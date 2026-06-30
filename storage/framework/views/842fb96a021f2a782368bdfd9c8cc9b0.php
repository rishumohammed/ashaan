<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASHAAN BY AMAN SHAN · Selected Work</title>
  <meta name="description"
    content="A selected archive of Ashaan's visual storytelling work by Aman Shan. From raw moments to refined edits." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Boldonse&family=Inter+Tight:wght@400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/styles.css'))); ?>" />
</head>

<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header">
    <div class="container container--wide">
      <nav class="nav" aria-label="Primary">
        <?php
          $headerLogo = \App\Models\SiteSetting::where('key', 'header_logo')->first();
        ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($headerLogo && $headerLogo->image_url): ?>
          <a class="brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e($headerLogo->image_url); ?>" alt="ASHAAN BY AMAN SHAN" style="max-height: 59px; width: auto;" /></a>
        <?php else: ?>
          <a class="brand" href="<?php echo e(url('/')); ?>"><span class="brand-mark" aria-hidden="true"></span> ASHAAN BY AMAN SHAN</a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <div class="nav-links" role="navigation">
          <a href="<?php echo e(url('/')); ?>">Home</a>
          <a href="<?php echo e(url('/work')); ?>" aria-current="page">Work</a>
          <a href="<?php echo e(url('/about')); ?>">About</a>
          <a href="<?php echo e(url('/services')); ?>">Services</a>
          <a href="<?php echo e(url('/contact')); ?>">Contact</a>
        </div>
        <div class="nav-cta-row">
          <a href="<?php echo e(url('/contact')); ?>" class="btn btn--primary btn--sm">Start a project
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
    <a href="<?php echo e(url('/')); ?>">Home</a>
    <a href="<?php echo e(url('/work')); ?>">Work</a>
    <a href="<?php echo e(url('/about')); ?>">About</a>
    <a href="<?php echo e(url('/services')); ?>">Services</a>
    <a href="<?php echo e(url('/contact')); ?>">Contact</a>
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
            <img src="<?php echo e(asset($settings['work_hero'] ?? 'assets/img/hero-archive.jpg')); ?>"
              alt="A wide editorial frame — a model in a long camel coat walking through an arched colonnade, late afternoon light cutting across the marble floor." />
            <div class="floating-tag ft-top">
              <span class="pill">Visuals</span>
              ASHAAN BY AMAN SHAN
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
          <button class="btn btn--primary btn--sm filter-btn" data-filter="all">All · <?php echo e($works->count()); ?></button>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($category->works_count > 0): ?>
              <button class="btn btn--ghost btn--sm filter-btn" data-filter="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?> · <?php echo e($category->works_count); ?></button>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
      </div>
    </section>

    <!-- Featured grid -->
    <section style="padding-top: 0;">
      <div class="container container--wide">
        <div class="work-grid">
          <?php $sizes = ['xl', 'sm', 'md', 'md', 'sm', 'lg', 'sm', 'md', 'md', 'lg', 'sm', 'sm']; $i = 0; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
          <a class="work-item work-item--<?php echo e($sizes[$i % count($sizes)]); ?> reveal" href="#">
            <div class="wm">
              <img src="<?php echo e($work->image_url); ?>"
                alt="<?php echo e($work->title); ?>" />
              <span class="wm-pill"><?php echo e($work->category->name); ?></span>
              <span class="wm-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M3 11L11 3M11 3H5M11 3V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg></span>
            </div>
            <div class="work-meta">
              <div>
                <div class="wm-title"><?php echo e($work->title); ?></div>
                <div class="wm-cap"><?php echo e($work->description); ?></div>
              </div>
              <div class="wm-cap"><?php echo e($work->project_no); ?></div>
            </div>
          </a>
          <?php $i++; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
              <cite>— Aman Shan, Founder of Ashaan</cite>
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
          <a class="btn btn--dark btn--lg" href="<?php echo e(url('/contact')); ?>">Start a project
            <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
              <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
          <a class="btn btn--ghost btn--lg" href="<?php echo e(url('/services')); ?>">See rates &amp; process</a>
        </div>
      </div>
    </section>

  </main>

  <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <script src="assets/js/site.js" defer></script>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\Aman shah\resources\views/work.blade.php ENDPATH**/ ?>