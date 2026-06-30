<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASHAAN BY AMAN SHAN — Visual Storyteller</title>
  <meta name="description" content="Welcome to Ashaan, the creative portfolio of Aman Shan. A visual storyteller and videographer focused on creating cinematic, emotion-driven visuals." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Boldonse&family=Inter+Tight:wght@400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" />
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
          <a href="<?php echo e(url('/')); ?>" aria-current="page">Home</a>
          <a href="<?php echo e(url('/work')); ?>">Work</a>
          <a href="<?php echo e(url('/about')); ?>">About</a>
          <a href="<?php echo e(url('/services')); ?>">Services</a>
          <a href="<?php echo e(url('/contact')); ?>">Contact</a>
        </div>
        <div class="nav-cta-row">
          <a href="<?php echo e(url('/contact')); ?>" class="btn btn--primary btn--sm">Start a project
            <svg class="arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true"><path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-drawer"><span aria-hidden="true"></span></button>
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
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>WELCOME TO MY PORTFOLIO</span>
            <h1 class="hero-headline">
              I create visuals<br/>
              that <span class="lime">speak</span><br/>
              without <span class="slash">/</span> words.
            </h1>
            <p class="hero-sub">
              Welcome to Ashaan. I am Aman Shan, a visual storyteller and videographer focused on creating cinematic, emotion-driven visuals. From raw moments to refined edits, this is where my ideas come to life.
            </p>
            <div class="hero-cta-row">
              <a class="btn btn--primary btn--lg" href="<?php echo e(url('/work')); ?>">See selected work
                <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true"><path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
              <a class="btn btn--ghost btn--lg" href="<?php echo e(url('/services')); ?>">Services &amp; rates</a>
            </div>
            <div class="hero-meta">
              <span><strong>Calicut</strong> · base</span>
              <span aria-hidden="true">·</span>
              <span><strong>Worldwide</strong> · available for travel</span>
            </div>
          </div>
          <div class="hero-media reveal">
            <img src="<?php echo e(asset($settings['index_hero'] ?? 'assets/img/hero-portrait.jpg')); ?>" alt="ASHAAN BY AMAN SHAN Portrait" />
          </div>
        </div>

        <!-- Stat strip -->
        <div class="stat-strip">
          <div class="stat-cell">
            <div class="stat-num"><span class="lime">Calicut</span></div>
            <div class="stat-label">Based in Kerala</div>
          </div>
          <div class="stat-cell">
            <div class="stat-num">Visuals</div>
            <div class="stat-label">Emotion-driven storytelling</div>
          </div>
          <div class="stat-cell">
            <div class="stat-num">Cinematic</div>
            <div class="stat-label">Aesthetic & composition</div>
          </div>
          <div class="stat-cell">
            <div class="stat-num">Global<span class="lime">+</span></div>
            <div class="stat-label">Available for travel</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Selected work -->
    <section>
      <div class="container container--wide">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Selected work</span>
            <h2>Frames from<br/>my journey.</h2>
          </div>
          <p class="lede">
            I chose these because each one taught me something new — a different light, a different brief, a different way to capture a fleeting moment. Click through to see the stories behind the visuals.
          </p>
        </div>

        <div class="work-grid">
          <?php
            // Row 1: 8+4, Row 2: 5+7, Row 3: 4+4+4, Row 4: 7+5, Row 5: 4+8
            $gridClasses = [
                'work-item--xl', 'work-item--sm',
                'work-item--md', 'work-item--lg',
                'work-item--sm', 'work-item--sm', 'work-item--sm',
                'work-item--lg', 'work-item--md',
                'work-item--sm', 'work-item--xl'
            ];
          ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
          <a class="work-item <?php echo e($gridClasses[$index % count($gridClasses)]); ?> reveal" href="<?php echo e(url('/work')); ?>">
            <div class="wm">
              <img src="<?php echo e($work->image_url); ?>" alt="<?php echo e($work->title); ?>" />
              <span class="wm-pill"><?php echo e($work->category->name ?? 'Work'); ?></span>
              <span class="wm-arrow" aria-hidden="true">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 11L11 3M11 3H5M11 3V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
              </span>
            </div>
            <div class="work-meta">
              <div>
                <div class="wm-title"><?php echo e($work->title); ?></div>
                <div class="wm-cap"><?php echo e(Str::limit($work->description, 50)); ?></div>
              </div>
              <div class="wm-cap">No. <?php echo e(str_pad($work->id, 3, '0', STR_PAD_LEFT)); ?></div>
            </div>
          </a>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>

        <div class="center-row" style="margin-top: var(--space-7); justify-content: center;">
          <a class="btn btn--ghost btn--lg" href="<?php echo e(url('/work')); ?>">All projects
            <svg class="arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true"><path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Capability bento -->
    <section>
      <div class="container container--wide">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>What I do</span>
            <h2>My creative<br/>focus.</h2>
          </div>
          <p class="lede">
            My creative journey spans across several styles. I believe that whether I am capturing the energy of a street, the elegance of fashion, or the intimacy of a wedding, the core principles of cinematic storytelling remain the same.
          </p>
        </div>

        <div class="cap-bento">
          <article class="cap-card cap-card--wide">
            <span class="cap-num">01 / Fashion</span>
            <h3>Style &amp;<br/>Editorial aesthetics.</h3>
            <p>From conceptual brand campaigns to editorial shoots, I focus on capturing the texture, movement, and mood of fashion. Every frame is carefully composed to highlight the garments and the attitude behind them.</p>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">02 / Street</span>
            <h3>Raw, everyday moments.</h3>
            <p>Capturing the candid energy of the streets. No setups, just observation and timing to find the extraordinary in the ordinary.</p>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">03 / Baby</span>
            <h3>Priceless milestones.</h3>
            <p>Documenting the earliest, most fleeting moments of life with a gentle, unobtrusive approach to create timeless memories.</p>
          </article>

          <article class="cap-card cap-card--tall">
            <?php
                $weddingImage = \App\Models\SiteSetting::where('key', 'homepage_wedding_image')->first();
                $weddingImageUrl = $weddingImage && $weddingImage->image_url ? $weddingImage->image_url : asset('assets/img/cap-tall.jpg');
            ?>
            <img src="<?php echo e($weddingImageUrl); ?>" alt="A wide architectural interior — concrete columns and a tall window casting a long shadow on a polished concrete floor." />
            <div class="cap-tall-meta">
              <span class="cap-num lime-text">04 / Wedding</span>
              <h3>Cinematic love stories.</h3>
              <p>Your special day captured as a beautiful film. I focus on the authentic emotions, the grand atmosphere, and the intimate details that make your story unique.</p>
            </div>
          </article>

          <article class="cap-card cap-card--std">
            <span class="cap-num">05 / Commercial</span>
            <h3>Visuals for brands.</h3>
            <p>Working closely with businesses to craft promotional visuals that elevate their brand identity and engage their audience.</p>
          </article>

          <article class="cap-card cap-card--wide">
            <span class="cap-num">06 / Post-Production</span>
            <h3>Color &amp; editing.</h3>
            <p>The story comes together in the edit. I handle all my own post-production, ensuring a consistent cinematic color grade and rhythm from the first shot to the final export.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Process section -->
    <section class="snug">
      <div class="container container--wide">
        <div class="split">
          <div class="split-text">
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>How I work</span>
            <h2>From the first<br/>call to the final cut.</h2>
            <p>
              I take a highly personal approach to every project. When you work with me, you are working directly with the creator. We will discuss your vision, plan the shoot, and collaborate to ensure the final product perfectly captures the emotion and cinematic quality you are looking for.
            </p>
            <ul class="split-fact-list">
              <li><b>Step 01</b><span>Discovery — understanding your brief and mood</span></li>
              <li><b>Step 02</b><span>Planning — scouting, timing, and preparation</span></li>
              <li><b>Step 03</b><span>Production — capturing the moments on set or location</span></li>
              <li><b>Step 04</b><span>Post — editing, color grading, and refining</span></li>
              <li><b>Step 05</b><span>Delivery — final high-quality files and revisions</span></li>
            </ul>
            <a class="btn btn--ghost" href="<?php echo e(url('/services')); ?>">See full process
              <svg class="arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true"><path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
          <div class="split-img">
            <img src="<?php echo e(asset($settings['index_process'] ?? 'assets/img/process-shoot.jpg')); ?>" alt="A working set — a photographer reviews tethered captures on a calibrated monitor." />
            <span class="ft-corner">Behind the scenes</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta">
      <div class="container container--narrow">
        <span class="label" style="color: rgba(10,10,12,0.6);">Booking</span>
        <h2>Have a project<br/>that needs a<br/>cinematic touch?</h2>
        <p class="lede">
          Whether you're planning a wedding, a brand campaign, or a personal shoot, I am always excited to hear about new ideas. Let's discuss how we can bring your vision to life.
        </p>
        <div class="cta-row">
          <a class="btn btn--dark btn--lg" href="<?php echo e(url('/contact')); ?>">Let's talk
            <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true"><path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a class="btn btn--ghost btn--lg" href="<?php echo e(url('/services')); ?>">View services</a>
        </div>
      </div>
    </section>

  </main>

  <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <script src="assets/js/site.js" defer></script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Aman shah\resources\views/index.blade.php ENDPATH**/ ?>