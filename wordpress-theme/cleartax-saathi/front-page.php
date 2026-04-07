<?php
/**
 * Front page template.
 *
 * @package CleartaxSaathi
 */

if ( ! defined( 'ABSPATH' ) ) {
	 exit;
}

get_header();
?>
<!-- Custom Cursor -->
  <div id="cursor-dot"></div>
  <div id="cursor-ring"></div>

  <!-- ═══ NAV ═══════════════════════════════════════════ -->
  <nav id="nav">
    <div class="nav-logo">
      <div class="nav-logo-icon">CS</div>
      <span class="nav-logo-text">Cleartax <span>Saathi</span></span>
    </div>
    <ul class="nav-links">
      <li><a href="<?php echo esc_url( home_url( '/#hero' ) ); ?>">Home</a></li>
      <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a></li>
      <li><a href="<?php echo esc_url( home_url( '/#compliance' ) ); ?>">Compliance</a></li>
      <li><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/#blogs' ) ); ?>">Blogs</a></li>
      <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact Us</a></li>
      <li><a href="<?php echo esc_url( home_url( '/#about-us' ) ); ?>">About Us</a></li>
    </ul>
    <a href="https://wa.me/918882453238" class="nav-cta">Get Started →</a>
  </nav>

  <!-- ═══ HERO ══════════════════════════════════════════ -->
    <section id="hero">
    <div class="hero-glow"></div>
    <div class="hero-grid-lines"></div>
    <div class="hero-shell">
      <div class="hero-copy">
        <div class="hero-tag tag reveal">New Delhi's Premier Tax Advisory</div>
        <div class="hero-badge-strip reveal">
          <span class="hero-badge">GST</span>
          <span class="hero-badge">Income Tax</span>
          <span class="hero-badge">ROC Compliance</span>
        </div>
        <h1 class="hero-headline">
          <span class="word"><span class="word-inner">Premium</span></span>
          <span class="word"><span class="word-inner">Tax Advisory</span></span>
          <span class="word"><span class="word-inner">With Human Clarity.</span></span>
        </h1>
        <p class="hero-sub reveal">
          Cleartax Saathi combines expert-led guidance, deadline-first execution, and a polished digital workflow for founders, professionals, and growing businesses across India.
        </p>
        <div class="hero-actions reveal">
          <div class="magnetic-btn-wrap">
            <a href="https://wa.me/918882453238" class="btn-primary">
              Book Free Consultation
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
          <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="btn-secondary">
            Explore Services
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12l4 4 4-4"/></svg>
          </a>
        </div>
        <div class="hero-stats reveal">
          <div class="stat-item">
            <div class="stat-num" data-count="500">0<span>+</span></div>
            <div class="stat-label">Clients Served</div>
          </div>
          <div class="stat-item">
            <div class="stat-num" data-count="12">0<span>+</span></div>
            <div class="stat-label">Years of Expertise</div>
          </div>
          <div class="stat-item">
            <div class="stat-num" data-count="98">0<span>%</span></div>
            <div class="stat-label">Compliance Rate</div>
          </div>
          <div class="stat-item">
            <div class="stat-num">200<span>Cr+</span></div>
            <div class="stat-label">Taxes Managed</div>
          </div>
        </div>
      </div>
      <div class="hero-visual reveal" aria-hidden="true">
        <div class="hero-orbit"></div>
        <div class="hero-portrait-card">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/amit-portrait.jpeg' ); ?>"
            alt="CA Amit Goyal portrait"
            class="hero-portrait-photo"
          />
          <div class="hero-portrait-note">
            <div class="hero-portrait-name">Amit Goyal</div>
            <div class="hero-portrait-role">Founder and principal advisor bringing direct CA-led guidance to every compliance decision.</div>
          </div>
        </div>
        <div class="hero-dashboard glass-card">
          <div class="hero-dash-top">
            <div class="hero-dash-title">Compliance Dashboard</div>
            <div class="hero-dash-chip">On Track</div>
          </div>
          <div class="hero-dash-chart">
            <div class="hero-bar" style="height:42%;"></div>
            <div class="hero-bar" style="height:56%;"></div>
            <div class="hero-bar" style="height:48%;"></div>
            <div class="hero-bar" style="height:70%;"></div>
            <div class="hero-bar" style="height:66%;"></div>
            <div class="hero-bar" style="height:84%;"></div>
            <div class="hero-bar" style="height:92%;"></div>
          </div>
          <div class="hero-dash-list">
            <div class="hero-dash-item">
              <span>GST Filing Cycle</span>
              <span class="hero-dash-status">Ready</span>
            </div>
            <div class="hero-dash-item">
              <span>ITR Documentation</span>
              <span class="hero-dash-status">Updated</span>
            </div>
            <div class="hero-dash-item">
              <span>ROC Calendar</span>
              <span class="hero-dash-status">Synced</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ MARQUEE ════════════════════════════════════════ -->
  <div class="marquee-section">
    <div class="marquee-track" id="marquee">
      <!-- Items duplicated in JS -->
    </div>
  </div>

  <!-- ═══ SERVICES / BENTO ══════════════════════════════ -->
  <section id="services" style="padding: 120px 48px;">
    <div class="section-inner">
      <div class="sec-header reveal">
        <div class="tag">Our Services</div>
        <h2>A complete financial ecosystem, <em style="font-style:normal;color:var(--emerald)">built for growth.</em></h2>
        <p>From GST filing to company formation, we handle the complexity so you can focus on building what matters.</p>
      </div>

      <div class="bento-grid">
        <!-- Card 1 - Wide -->
        <div class="glass-card bento-card bento-c1 bento-spotlight">
          <div class="spotlight"></div>
          <div class="bento-num">01 — GST Ecosystem</div>
          <div class="bento-title">End-to-end GST Management for your Business</div>
          <div class="bento-desc">From registration to monthly reconciliation — we ensure your GST compliance is airtight, penalty-free, and optimised for your industry.</div>
          <div class="bento-pills">
            <span class="bento-pill">GST Registration</span>
            <span class="bento-pill">GSTR-1 &amp; 3B Filing</span>
            <span class="bento-pill">ITC Reconciliation</span>
            <span class="bento-pill">Annual Return</span>
            <span class="bento-pill">GST Audit</span>
          </div>
          <div class="bento-footer">Explore GST Services <span class="bento-arrow">→</span></div>
        </div>

        <!-- Card 2 - Tall right -->
        <div class="glass-card bento-card bento-c2 bento-spotlight">
          <div class="spotlight"></div>
          <div class="bento-icon">🏛️</div>
          <div class="bento-num">04 — Company Formation</div>
          <div class="bento-title">Start Your Pvt Ltd or LLP in 7 Days</div>
          <div class="bento-desc">Complete end-to-end company incorporation — MCA filing, PAN/TAN application, bank account advisory, and post-formation compliance setup.</div>
          <div class="bento-pills" style="margin-top:20px;">
            <span class="bento-pill">Pvt. Ltd.</span>
            <span class="bento-pill">LLP</span>
            <span class="bento-pill">OPC</span>
            <span class="bento-pill">Partnership</span>
          </div>
          <div style="margin-top:32px;padding:20px;border-radius:14px;background:rgba(15,140,141,0.08);border:1px solid var(--border-em);">
            <div style="font-size:11px;text-transform:uppercase;letter-spacing:.1em;color:var(--emerald);font-weight:700;margin-bottom:8px;">Fast-track Promise</div>
            <div style="font-size:1.8rem;font-weight:900;letter-spacing:-.04em;">7 Days</div>
            <div style="font-size:13px;color:var(--titanium-dim);margin-top:4px;">Average Incorporation Time</div>
          </div>
          <div class="bento-footer" style="margin-top:24px;">Start Incorporation <span class="bento-arrow">→</span></div>
        </div>

        <!-- Card 3 -->
        <div class="glass-card bento-card bento-c3 bento-spotlight">
          <div class="spotlight"></div>
          <div class="bento-icon">📊</div>
          <div class="bento-num">02 — Income Tax & TDS</div>
          <div class="bento-title">Strategic ITR Filing for Individuals & HUFs</div>
          <div class="bento-desc">Tax planning, ITR filing, TDS returns and notice resolution — handled by CAs who understand your financial profile.</div>
          <div class="bento-footer">File Your ITR <span class="bento-arrow">→</span></div>
        </div>

        <!-- Card 4 -->
        <div class="glass-card bento-card bento-c4 bento-spotlight">
          <div class="spotlight"></div>
          <div class="bento-icon">🔍</div>
          <div class="bento-num">03 — Audit & Assurance</div>
          <div class="bento-title">Internal Audits that Drive Business Growth</div>
          <div class="bento-desc">We turn statutory obligations into strategic insights — uncovering operational risks and growth levers through rigorous audit methodology.</div>
          <div class="bento-footer">Learn About Audits <span class="bento-arrow">→</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ PROCESS / STACKING CARDS ══════════════════════ -->
  <section id="process" style="padding: 120px 48px;">
    <div class="section-inner">
      <div class="sec-header reveal" style="margin:0 auto 80px;text-align:center;max-width:560px;">
        <div class="tag" style="margin:0 auto 16px;">How We Work</div>
        <h2>A structured path to <em style="font-style:normal;color:var(--emerald)">total compliance.</em></h2>
      </div>
      <div class="stack-container">
        <div class="glass-card stack-card stack-card-bg1">
          <div class="stack-step">01</div>
          <div class="stack-title">Deep-Dive Discovery Call</div>
          <div class="stack-desc">We begin with a comprehensive 30-minute consultation to understand your business structure, revenue model, and compliance status. No assumptions — just precise diagnosis. This session is completely free of charge.</div>
        </div>
        <div class="glass-card stack-card stack-card-bg2">
          <div class="stack-step">02</div>
          <div class="stack-title">Custom Compliance Roadmap</div>
          <div class="stack-desc">Our CAs design a bespoke tax and compliance strategy tailored to your entity type, sector, and growth stage. You receive a clear action plan with timelines, costs, and responsibilities laid out transparently.</div>
        </div>
        <div class="glass-card stack-card stack-card-bg3">
          <div class="stack-step">03</div>
          <div class="stack-title">Execution & Continuous Advisory</div>
          <div class="stack-desc">We file, reconcile, and advise on an ongoing basis — with dedicated support via WhatsApp, email, and in-person at our Dabri Moad headquarters. You're never alone in a compliance emergency.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ COMPLIANCE CLOCK ═══════════════════════════════ -->
  <section id="compliance" style="padding: 120px 48px;">
    <div class="section-inner">
      <hr class="em-hr" />
      <div class="clock-wrapper">
        <div class="clock-card reveal">
          <div class="clock-label">Live Compliance Clock</div>
          <div class="clock-display">
            <div class="clock-unit">
              <div class="clock-num" id="cd-days">00</div>
              <div class="clock-unit-label">Days</div>
            </div>
            <div class="clock-sep">:</div>
            <div class="clock-unit">
              <div class="clock-num" id="cd-hours">00</div>
              <div class="clock-unit-label">Hours</div>
            </div>
            <div class="clock-sep">:</div>
            <div class="clock-unit">
              <div class="clock-num" id="cd-mins">00</div>
              <div class="clock-unit-label">Mins</div>
            </div>
            <div class="clock-sep">:</div>
            <div class="clock-unit">
              <div class="clock-num" id="cd-secs">00</div>
              <div class="clock-unit-label">Secs</div>
            </div>
          </div>
          <div class="clock-deadline-name" id="cd-name">GSTR-3B (March 2026)</div>
          <div class="clock-deadline-date" id="cd-date">Deadline: 20th April 2026</div>
        </div>

        <div class="glass-card clock-info-card reveal">
          <div class="clock-info-title">Upcoming GST Deadlines</div>
          <div class="clock-info-desc">Stay ahead of the compliance calendar. Missing a filing date can trigger penalties under Section 47 of the CGST Act. We file on time, every time.</div>
          <ul class="deadline-list">
            <li class="deadline-item">
              <span class="deadline-dot"></span>
              <span>GSTR-3B (Mar 2026)</span>
              <span class="deadline-date">20 Apr 2026</span>
            </li>
            <li class="deadline-item">
              <span class="deadline-dot" style="background:#F59E0B;"></span>
              <span>GSTR-1 (Mar 2026)</span>
              <span class="deadline-date">11 Apr 2026</span>
            </li>
            <li class="deadline-item">
              <span class="deadline-dot" style="background:#6366F1;"></span>
              <span>TDS Return Q4 FY25-26</span>
              <span class="deadline-date">31 May 2026</span>
            </li>
            <li class="deadline-item">
              <span class="deadline-dot" style="background:#EC4899;"></span>
              <span>ITR Filing (Non-Audit)</span>
              <span class="deadline-date">31 Jul 2026</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ FOUNDER ════════════════════════════════════════ -->
  <section id="about-us" style="padding: 120px 48px;">
    <div class="section-inner">
      <div class="founder-grid">
        <div class="glass-card founder-avatar-card reveal">
          <div class="founder-photo-wrap">
            <img
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/amit-office-wall.jpeg' ); ?>"
              alt="Amit Goyal at office wall branding"
              class="founder-photo"
            />
          </div>
          <div class="founder-name">Amit Goyal</div>
          <div class="founder-title">Founder & Principal Advisor</div>
          <div class="founder-creds">
            <div class="founder-cred">
              <span class="founder-cred-icon">🏆</span>
              <span>Chartered Accountant (ICAI)</span>
            </div>
            <div class="founder-cred">
              <span class="founder-cred-icon">📍</span>
              <span>Based in Dabri Moad, New Delhi</span>
            </div>
            <div class="founder-cred">
              <span class="founder-cred-icon">⚖️</span>
              <span>GST & Income Tax Practitioner</span>
            </div>
            <div class="founder-cred">
              <span class="founder-cred-icon">🏢</span>
              <span>Registered with GSTN & MCA</span>
            </div>
          </div>
        </div>

        <div class="glass-card founder-content reveal">
          <div class="tag" style="margin-bottom:24px;">A Message from the Founder</div>
          <div class="founder-quote">
            "Compliance is not a burden — it's the foundation on which great businesses are built."
          </div>
          <p class="founder-body">
            At Cleartax Saathi, we believe every entrepreneur in India deserves access to the same caliber of financial expertise that was once reserved for large corporations. Our practice was built from the heart of West Delhi — from our office at Dabri Moad — with a singular mission: to make taxation transparent, proactive, and powerful for our clients.
          </p>
          <p class="founder-body">
            With over a decade of experience spanning GST, income tax, corporate law, and business advisory, we bring precision and personal attention to every engagement. When you work with us, you work directly with Amit Goyal — not a junior associate.
          </p>
          <div class="founder-hq">
            <span class="hq-icon">📌</span>
            <div>
              <div class="hq-label">Our Headquarters</div>
              <div class="hq-address">B33 Sitapuri Extension Part 1, Street No. 4, Dabri Moad, New Delhi 110045</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ WHY US ════════════════════════════════════════ -->
  <section id="why" style="padding: 120px 48px;">
    <div class="section-inner">
      <div class="sec-header reveal" style="margin:0 auto 64px;text-align:center;max-width:560px;">
        <div class="tag" style="margin: 0 auto 16px;">Why Cleartax Saathi</div>
        <h2>The Cleartax Saathi <em style="font-style:normal;color:var(--emerald)">difference.</em></h2>
      </div>
      <div class="why-grid">
        <div class="glass-card why-card reveal">
          <div class="why-icon">⚡</div>
          <div class="why-title">Tech-First Workflow</div>
          <div class="why-desc">We use modern compliance software and secure document portals — no paperwork chaos, no last-minute scrambles. Everything is tracked and delivered on time.</div>
        </div>
        <div class="glass-card why-card reveal">
          <div class="why-icon">🎯</div>
          <div class="why-title">Direct Partner Access</div>
          <div class="why-desc">You speak directly with Amit Goyal — a practicing CA — not an entry-level executive. Your concerns are addressed by the expert, every single time.</div>
        </div>
        <div class="glass-card why-card reveal">
          <div class="why-icon">🔒</div>
          <div class="why-title">Zero-Penalty Promise</div>
          <div class="why-desc">We've maintained a zero-penalty record across our client portfolio. Our proactive calendar and automated reminders ensure you never miss a critical deadline.</div>
        </div>
        <div class="glass-card why-card reveal">
          <div class="why-icon">📈</div>
          <div class="why-title">Growth-Oriented Advisory</div>
          <div class="why-desc">We don't just file returns — we advise on tax-efficient structures, optimal business decisions, and compliance strategies that unlock real financial growth.</div>
        </div>
        <div class="glass-card why-card reveal">
          <div class="why-icon">🤝</div>
          <div class="why-title">Fixed, Transparent Pricing</div>
          <div class="why-desc">No hidden charges, no surprise invoices. Our engagement letters clearly outline scope and fees — because trust begins with financial transparency.</div>
        </div>
        <div class="glass-card why-card reveal">
          <div class="why-icon">🌐</div>
          <div class="why-title">West Delhi Rooted, Pan-India Ready</div>
          <div class="why-desc">Headquartered in Dabri Moad, New Delhi, we serve clients across India through digital-first delivery, with the personal touch of a neighborhood CA firm.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ CTA BANNER ════════════════════════════════════ -->
  <section id="blogs" style="padding: 120px 48px;">
    <div class="section-inner">
      <div class="sec-header reveal" style="margin:0 auto 64px;text-align:center;max-width:680px;">
        <div class="tag" style="margin: 0 auto 16px;">Latest Insights</div>
        <h2>Practical tax and compliance <span class="em">guides for founders.</span></h2>
        <p>Use these featured reading blocks as your blog section until full articles are added. They give visitors immediate educational value and support SEO-friendly expansion later.</p>
      </div>
      <div class="blog-grid">
        <article class="glass-card blog-card reveal">
          <div class="blog-meta"><span class="blog-dot"></span>GST Guide</div>
          <h3 class="blog-title">GST registration checklist for new businesses in India</h3>
          <p class="blog-excerpt">A simple walkthrough of documents, turnover thresholds, and the common registration mistakes that delay onboarding for startups and service firms.</p>
          <a href="https://wa.me/918882453238?text=Hi%20Amit%2C%20I%20want%20help%20with%20GST%20registration." class="blog-link">Ask about GST registration</a>
        </article>
        <article class="glass-card blog-card reveal">
          <div class="blog-meta"><span class="blog-dot"></span>Income Tax</div>
          <h3 class="blog-title">How to prepare your books before ITR filing season starts</h3>
          <p class="blog-excerpt">Learn what records to organize early, how to separate personal and business expenses, and what your accountant needs before return filing begins.</p>
          <a href="https://wa.me/918882453238?text=Hi%20Amit%2C%20I%20want%20help%20with%20ITR%20filing." class="blog-link">Discuss your ITR filing</a>
        </article>
        <article class="glass-card blog-card reveal">
          <div class="blog-meta"><span class="blog-dot"></span>Compliance</div>
          <h3 class="blog-title">Monthly compliance calendar every founder should follow</h3>
          <p class="blog-excerpt">A founder-friendly view of recurring GST, TDS, ROC, and bookkeeping deadlines so nothing slips and penalties never become a surprise.</p>
          <a href="https://wa.me/918882453238?text=Hi%20Amit%2C%20I%20need%20a%20monthly%20compliance%20plan." class="blog-link">Get a compliance plan</a>
        </article>
      </div>
    </div>
  </section>

  <section id="contact" style="padding: 120px 48px 20px;">
    <div class="section-inner">
      <div class="sec-header reveal" style="margin:0 auto 64px;text-align:center;max-width:640px;">
        <div class="tag" style="margin: 0 auto 16px;">Contact Us</div>
        <h2>Speak to a tax advisor who values <span class="em">clarity and speed.</span></h2>
        <p>Whether you need filing support, a compliance review, or business setup guidance, Cleartax Saathi is available on call, WhatsApp, and in person in New Delhi.</p>
      </div>
      <div class="contact-grid">
        <div class="glass-card contact-card reveal">
          <div class="contact-stack">
            <div class="contact-item">
              <div class="contact-label">Phone</div>
              <div class="contact-value"><a href="tel:+918882453238">+91 88824 53238</a></div>
            </div>
            <div class="contact-item">
              <div class="contact-label">WhatsApp</div>
              <div class="contact-value"><a href="https://wa.me/918882453238">Start a direct chat with Amit Goyal</a></div>
            </div>
            <div class="contact-item">
              <div class="contact-label">Office Address</div>
              <div class="contact-value">B33 Sitapuri Extension Part 1, Street No. 4, Dabri Moad, New Delhi 110045</div>
            </div>
          </div>
          <p class="contact-note">Fastest response usually comes through WhatsApp for document sharing, appointment scheduling, and quick tax questions.</p>
          <div class="contact-actions-row">
            <a href="https://wa.me/918882453238?text=Hi%20Amit%2C%20I%20want%20to%20book%20a%20consultation." class="btn-whatsapp">WhatsApp Now</a>
            <a href="tel:+918882453238" class="btn-secondary">Call Now</a>
          </div>
        </div>
        <div class="glass-card contact-card reveal">
          <div class="tag" style="margin-bottom:18px;">Office Hours</div>
          <div class="contact-side-title">Visit the New Delhi office or schedule a remote consultation.</div>
          <p class="contact-side-copy">We support founders, salaried professionals, and growing businesses with both in-person and digital workflows. Share your requirement and we will guide you on the next best step.</p>
          <div class="contact-item" style="margin-bottom:12px;">
            <div class="contact-label">Working Days</div>
            <div class="contact-value">Monday to Saturday</div>
          </div>
          <div class="contact-item">
            <div class="contact-label">Consultation Window</div>
            <div class="contact-value">10:00 AM to 7:00 PM</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cta" style="padding: 80px 48px 100px;">
    <div class="cta-card glass-card reveal">
      <div class="tag" style="margin: 0 auto 32px; display:inline-flex;">New Delhi's Most Trusted Tax Advisors</div>
      <h2>Your compliance journey starts with <span class="em">one conversation.</span></h2>
      <p>Book a free 30-minute consultation with Amit Goyal. No obligation. No jargon. Just clarity.</p>
      <div class="cta-actions">
        <a href="https://wa.me/918882453238?text=Hi%20Amit%2C%20I%20would%20like%20to%20book%20a%20free%20consultation%20with%20Cleartax%20Saathi." class="btn-whatsapp">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Chat on WhatsApp
        </a>
        <a href="tel:+918882453238" class="btn-secondary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 10.5a19.79 19.79 0 01-3.07-8.67A2 2 0 013.59 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 7.91a16 16 0 006.29 6.29l.95-.95a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 15.43v1.49z"/></svg>
          Call +91 88824 53238
        </a>
      </div>
    </div>
  </section>

  <!-- ═══ FOOTER ════════════════════════════════════════ -->
  <footer>
    <div class="footer-grid">
      <div>
        <div class="footer-logo nav-logo">
          <div class="nav-logo-icon">CS</div>
          <span class="nav-logo-text">Cleartax <span>Saathi</span></span>
        </div>
        <p class="footer-desc" style="margin-top:16px;">New Delhi's premier tax and business consultancy. Expert-led. Tech-driven. Trusted since 2012.</p>
        <div style="margin-top:24px;display:flex;gap:12px;">
          <a href="https://wa.me/918882453238" style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,0.06);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:16px;transition:background .2s;" onmouseover="this.style.background='rgba(15,140,141,0.15)'" onmouseout="this.style.background='rgba(255,255,255,0.06)'">💬</a>
          <a href="tel:+918882453238" style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,0.06);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:16px;transition:background .2s;" onmouseover="this.style.background='rgba(15,140,141,0.15)'" onmouseout="this.style.background='rgba(255,255,255,0.06)'">📞</a>
        </div>
      </div>

      <div>
        <div class="footer-col-title">Services</div>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">GST Registration & Filing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Income Tax Returns</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">TDS Filing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Internal Audit</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Company Formation</a></li>
        </ul>
      </div>

      <div>
        <div class="footer-col-title">Company</div>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url( '/#about-us' ) ); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#why' ) ); ?>">Why Cleartax Saathi</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#compliance' ) ); ?>">Compliance Calendar</a></li>
          <li><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/#blogs' ) ); ?>">Blogs</a></li>
        </ul>
      </div>

      <div>
        <div class="footer-col-title">Contact</div>
        <ul class="footer-links">
          <li><a href="https://wa.me/918882453238">WhatsApp: +91 88824 53238</a></li>
          <li><a href="tel:+918882453238">Call: +91 88824 53238</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Book a consultation</a></li>
          <li><a href="#">B33 Sitapuri Extension Part 1</a></li>
          <li><a href="#">Street No. 4, Dabri Moad</a></li>
          <li><a href="#">New Delhi 110045</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© 2026 <span class="footer-em">Cleartax Saathi</span>. All rights reserved. Registered in India.</span>
      <span>Crafted with precision in New Delhi 🇮🇳</span>
    </div>
  </footer>

  <!-- ═══ SCRIPTS ════════════════════════════════════════ -->

<?php
get_footer();

