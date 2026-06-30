<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASHAAN BY AMAN SHAN · Services</title>
  <meta name="description" content="Services and packages for cinematic visual storytelling and videography by Ashaan, founded by Aman Shan." />
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
          <a href="<?php echo e(url('/')); ?>">Home</a>
          <a href="<?php echo e(url('/work')); ?>">Work</a>
          <a href="<?php echo e(url('/about')); ?>">About</a>
          <a href="<?php echo e(url('/services')); ?>" aria-current="page">Services</a>
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
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Tailored approach</span>
            <h1 class="hero-headline">
              Custom packages<br />
              for your<br />
              <span class="lime">vision.</span>
            </h1>
            <p class="hero-sub">
              Every project is unique. Let's discuss your ideas and build a package that perfectly fits your cinematic needs. I focus on bringing your story to life through high-quality visuals.
            </p>
            <div class="hero-cta-row">
              <a class="btn btn--primary btn--lg" href="<?php echo e(url('/contact')); ?>">Contact Me</a>
              <a class="btn btn--ghost btn--lg" href="#process">See my workflow</a>
            </div>
            <div class="hero-meta">
              <span><strong>Custom</strong> · tailored approach</span>
              <span aria-hidden="true">·</span>
              <span><strong>Calicut</strong> · available worldwide</span>
            </div>
          </div>
          <div class="hero-media">
            <img src="<?php echo e(asset($settings['services_hero'] ?? 'assets/img/services-hero.jpg')); ?>" alt="ASHAAN BY AMAN SHAN working on set" />
            <div class="floating-tag ft-top">
              <span class="pill">Process</span>
              CINEMATIC VISUALS
            </div>
            <div class="floating-tag ft-bottom">
              Aman Shan, Founder of Ashaan
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="rates">
      <div class="container container--wide">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Services</span>
            <h2>What I offer.</h2>
          </div>
          <p class="lede">
            My expertise covers a variety of disciplines, from commercial projects to personal milestones. Below is an overview of the types of projects I typically take on.
          </p>
        </div>

        <div class="cap-bento" style="margin-top: var(--space-6);">
          <article class="cap-card cap-card--std">
            <h3>Fashion</h3>
            <p>From conceptual lookbooks to outdoor campaigns, I capture the essence of fashion and style with a sharp eye for detail and cinematic composition.</p>
          </article>
          <article class="cap-card cap-card--std">
            <h3>Street</h3>
            <p>Authentic, unscripted visual storytelling. Whether it's a personal project or capturing the raw energy of an environment, I love finding stories in the real world.</p>
          </article>
          <article class="cap-card cap-card--std">
            <h3>Baby</h3>
            <p>Documenting the earliest, most fleeting moments of life with a gentle, unobtrusive approach to create timeless memories.</p>
          </article>
          <article class="cap-card cap-card--std">
            <h3>Wedding</h3>
            <p>Your special day captured as a beautiful film. I aim to document real emotions, grand atmospheres, and intimate, fleeting moments.</p>
          </article>
        </div>

        <div class="tier-grid">
          <p class="lede" style="grid-column: 1 / -1; margin-top: var(--space-6);">
            Every brief is unique. Whether you need a short fashion editorial or a multi-day commercial campaign, reach out with your requirements and I will provide a custom rate designed specifically for your project's scope.
          </p>
        </div>

        <p class="mono" style="text-align: center; color: var(--fg-mute); margin-top: var(--space-7);">
          All rates are customized to your specific needs · I will quote a fixed scope after our first conversation · All post-production is handled in-house.
        </p>
      </div>
    </section>

    <!-- Process -->
    <section id="process">
      <div class="container container--wide">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>How I work</span>
            <h2>From the first<br />call to the<br />final delivery.</h2>
          </div>
          <p class="lede">
            A clear and structured process ensures that your vision is fully realized. Every project moves through a collaborative, step-by-step workflow designed to deliver the best possible result.
          </p>
        </div>

        <div class="process-grid">
          <article class="process-card">
            <h3>01. Discovery</h3>
            <p>We start with a conversation. We will discuss your brief, references, target audience, and the overall mood you want to achieve.</p>
          </article>
          <article class="process-card">
            <h3>02. Proposal</h3>
            <p>Based on our discussion, I will provide a custom proposal including the scope of work, timeline, and pricing for your approval.</p>
          </article>
          <article class="process-card">
            <h3>03. Pre-production</h3>
            <p>Planning is key. This phase involves finalizing dates, scouting locations, organizing equipment, and locking in the creative direction.</p>
          </article>
          <article class="process-card">
            <h3>04. Production</h3>
            <p>The shoot itself. Whether it's a single day or a multi-day project, I focus on capturing high-quality, cinematic footage that tells your story.</p>
          </article>
          <article class="process-card">
            <h3>05. Post-production</h3>
            <p>The magic happens in the edit. I handle color grading, audio syncing, and editing to craft a polished final piece.</p>
          </article>
          <article class="process-card">
            <h3>06. Delivery</h3>
            <p>You will receive the final, high-resolution files ready for your intended platform, with opportunities for revisions to ensure perfection.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="tile-section">
      <div class="container container--narrow">
        <div class="section-head">
          <div>
            <span class="eyebrow eyebrow--on-tile"><span class="dot" aria-hidden="true"></span>Frequent questions</span>
            <h2>Questions I get<br />asked often.</h2>
          </div>
          <p class="lede">
            Here are some answers to common questions about my services and how I work. If you have any other questions, feel free to reach out.
          </p>
        </div>

        <div class="faq-grid">
          <div class="faq-card">
            <h3>How far in advance should I book?</h3>
            <p>For weddings and major campaigns, I recommend reaching out at least a few months in advance to secure your dates. For smaller projects, a few weeks notice is usually sufficient.</p>
          </div>
          <div class="faq-card">
            <h3>Do you travel for shoots?</h3>
            <p>Yes, absolutely. While I am based in Calicut, Kerala, I am available to travel nationally and internationally for the right project. Travel expenses are quoted separately.</p>
          </div>
          <div class="faq-card">
            <h3>Do you work solo or with a crew?</h3>
            <p>It depends on the scale of the project. For intimate shoots and documentaries, I often work solo. For larger commercial campaigns or events, I can bring in trusted assistants and additional crew members.</p>
          </div>
          <div class="faq-card">
            <h3>Do you handle all the editing yourself?</h3>
            <p>Yes, I believe post-production is a crucial part of visual storytelling. I personally edit and color grade all my projects to ensure the final product matches my artistic vision.</p>
          </div>
          <div class="faq-card">
            <h3>How long does it take to get the final video?</h3>
            <p>Turnaround times vary depending on the scope of the project. A typical commercial or event video may take 2-4 weeks, while larger projects may require more time. We will agree on a timeline upfront.</p>
          </div>
          <div class="faq-card">
            <h3>Do you provide raw footage?</h3>
            <p>Generally, I do not provide raw footage, as my editing and color grading are essential to the final cinematic product. However, specific licensing or buyout arrangements can be discussed if required.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Closing -->
    <section class="closing-cta">
      <div class="container container--narrow">
        <span class="label" style="color: rgba(10,10,12,0.6);">Let's collaborate</span>
        <h2>Ready to start<br />your project?</h2>
        <p class="lede">
          If you have a brief in mind or just want to discuss some ideas, I'd love to hear from you.
        </p>
        <div class="cta-row">
          <a class="btn btn--dark btn--lg" href="<?php echo e(url('/contact')); ?>">Contact Me
            <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
              <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
          <a class="btn btn--ghost btn--lg" href="<?php echo e(url('/work')); ?>">See my work</a>
        </div>
      </div>
    </section>

  </main>

  <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <script src="assets/js/site.js" defer></script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Aman shah\resources\views/services.blade.php ENDPATH**/ ?>