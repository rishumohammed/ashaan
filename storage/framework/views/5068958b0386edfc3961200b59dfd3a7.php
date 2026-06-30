<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASHAAN BY AMAN SHAN · Contact</title>
  <meta name="description" content="Contact Ashaan for projects, collaborations, and inquiries." />
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
          <a href="<?php echo e(url('/services')); ?>">Services</a>
          <a href="<?php echo e(url('/contact')); ?>" aria-current="page">Contact</a>
        </div>
        <div class="nav-cta-row">
          <a href="#intake" class="btn btn--primary btn--sm">Start a project
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
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Let's Collaborate</span>
            <h1 class="hero-headline">
              Tell me about<br />
              your <span class="lime">vision.</span>
            </h1>
            <p class="hero-sub">
              If you would like to get in touch, you can reach me via email at <strong>amanshannnn@gmail.com</strong> or by phone at <strong>+91 8848573039</strong>. You can also follow my latest work on social media at <strong>@nnot.amn</strong>. Thank you for your attention.
            </p>
            <div class="hero-cta-row">
              <a class="btn btn--primary btn--lg" href="#intake">Send a message</a>
            </div>
            <div class="hero-meta">
              <span><strong>Direct</strong> · I read every message</span>
              <span aria-hidden="true">·</span>
              <span><strong>Calicut</strong> · base</span>
            </div>
          </div>
          <div class="hero-media">
            <img src="<?php echo e(asset($settings['contact_hero'] ?? 'assets/img/contact-hero.jpg')); ?>" alt="ASHAAN BY AMAN SHAN working" />
            <div class="floating-tag ft-top">
              <span class="pill">Contact</span>
              Aman Shan, Founder of Ashaan
            </div>
            <div class="floating-tag ft-bottom">
              amanshannnn@gmail.com
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Channels -->
    <section id="channels">
      <div class="container container--wide">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Get in touch</span>
            <h2>How to reach me.</h2>
          </div>
        </div>

        <div class="channel-grid">
          <article class="channel-card">
            <span class="label">01 / Email</span>
            <h3>Direct Inbox.</h3>
            <p>The best way to reach me for project inquiries, collaborations, or general questions.</p>
            <a class="channel-line" href="mailto:amanshannnn@gmail.com">amanshannnn@gmail.com</a>
            <span class="mono" style="color: var(--fg-mute);">I try to reply within 24-48 hours.</span>
          </article>

          <article class="channel-card" id="press">
            <span class="label label--lime">02 / Phone</span>
            <h3>Call or WhatsApp.</h3>
            <p>For urgent matters or if you prefer a quick chat about your upcoming project.</p>
            <a class="channel-line" href="tel:+918848573039">+91 8848573039</a>
            <span class="mono" style="color: var(--fg-mute);">Available during standard business hours.</span>
          </article>

          <article class="channel-card" id="careers">
            <span class="label">03 / Social</span>
            <h3>Instagram.</h3>
            <p>Follow me to see my latest work, behind-the-scenes content, and recent projects.</p>
            <a class="channel-line" href="https://instagram.com/nnot.amn" target="_blank">@nnot.amn</a>
            <span class="mono" style="color: var(--fg-mute);">DMs are open for quick connections.</span>
          </article>
        </div>
      </div>
    </section>

    <!-- Intake form -->
    <section id="intake">
      <div class="container container--narrow">
        <div class="section-head">
          <div>
            <span class="eyebrow"><span class="dot" aria-hidden="true"></span>Project intake</span>
            <h2>Send me a<br />message.</h2>
          </div>
          <p class="lede">
            Fill out the form below to give me an idea of what you are looking for. I will get back to you as soon as possible to discuss the details.
          </p>
        </div>

        <form class="form-card" onsubmit="event.preventDefault(); this.querySelector('button[type=submit]').textContent='Thank you — I will be in touch.';">
          <div class="form-row">
            <div class="form-field">
              <label for="f-name">Your name</label>
              <input id="f-name" name="name" type="text" required placeholder="John Doe" />
            </div>
            <div class="form-field">
              <label for="f-email">Email</label>
              <input id="f-email" name="email" type="email" required placeholder="john@example.com" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-field">
              <label for="f-type">Project Type</label>
              <select id="f-type" name="type">
                <option>Commercial / Brand Video</option>
                <option>Wedding / Event</option>
                <option>Fashion / Portrait</option>
                <option>Documentary</option>
                <option>Other / Not Sure</option>
              </select>
            </div>
            <div class="form-field">
              <label for="f-dates">Estimated Dates</label>
              <input id="f-dates" name="dates" type="text" placeholder="e.g. Mid-March, 2 days" />
            </div>
          </div>

          <div class="form-row form-row--full">
            <div class="form-field">
              <label for="f-brief">Message / Brief</label>
              <textarea id="f-brief" name="brief" required placeholder="Tell me a bit about your project..."></textarea>
            </div>
          </div>

          <div class="form-actions">
            <small>By submitting, you agree I will reply to the email above.</small>
            <button type="submit" class="btn btn--primary btn--lg">Send Message
              <svg class="arrow" width="16" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
        </form>
      </div>
    </section>

  </main>

  <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <script src="assets/js/site.js" defer></script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Aman shah\resources\views/contact.blade.php ENDPATH**/ ?>