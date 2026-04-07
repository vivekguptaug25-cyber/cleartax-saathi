(function() {

    // ── 1. Custom Cursor ──────────────────────────────────
    const dot  = document.getElementById('cursor-dot');
    const ring = document.getElementById('cursor-ring');
    let mx = 0, my = 0, rx = 0, ry = 0;
    document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; });
    (function animCursor(){
      rx += (mx - rx) * 0.18;
      ry += (my - ry) * 0.18;
      dot.style.left  = mx + 'px';
      dot.style.top   = my + 'px';
      ring.style.left = rx + 'px';
      ring.style.top  = ry + 'px';
      requestAnimationFrame(animCursor);
    })();
    document.querySelectorAll('a, button, .bento-card, .glass-card').forEach(el => {
      el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hovering'));
      el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hovering'));
    });

    // ── 2. Marquee content ────────────────────────────────
    const partners = ['GSTN Registered', 'MCA Compliant', 'ICAI Member', 'ITR Expert', 'Startup India', 'MSME Certified', 'ISO 27001 Practices', 'Zero-Penalty Record', 'New Delhi Trusted'];
    const marquee = document.getElementById('marquee');
    const items = [...partners, ...partners, ...partners, ...partners].map(p =>
      `<div class="marquee-item"><span class="marquee-item-dot"></span>${p}</div>`
    ).join('');
    marquee.innerHTML = items;

    // ── 3. Bento Spotlight Effect ─────────────────────────
    document.querySelectorAll('.bento-spotlight').forEach(card => {
      const spot = card.querySelector('.spotlight');
      card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        spot.style.left = (e.clientX - rect.left) + 'px';
        spot.style.top  = (e.clientY - rect.top)  + 'px';
      });
    });

    // ── 4. Compliance Clock ───────────────────────────────
    function updateClock() {
      const deadlines = [
        { name: 'GSTR-1 (Mar 2026)',   date: new Date('2026-04-11T23:59:59') },
        { name: 'GSTR-3B (Mar 2026)', date: new Date('2026-04-20T23:59:59') },
        { name: 'TDS Return Q4',       date: new Date('2026-05-31T23:59:59') },
      ];
      const now = new Date();
      const next = deadlines.find(d => d.date > now) || deadlines[deadlines.length - 1];
      const diff = Math.max(0, next.date - now);
      const days  = Math.floor(diff / 86400000);
      const hours = Math.floor((diff % 86400000) / 3600000);
      const mins  = Math.floor((diff % 3600000)  / 60000);
      const secs  = Math.floor((diff % 60000)    / 1000);
      const pad = n => String(n).padStart(2,'0');
      document.getElementById('cd-days').textContent  = pad(days);
      document.getElementById('cd-hours').textContent = pad(hours);
      document.getElementById('cd-mins').textContent  = pad(mins);
      document.getElementById('cd-secs').textContent  = pad(secs);
      document.getElementById('cd-name').textContent  = next.name;
      const opts = { day:'numeric', month:'long', year:'numeric' };
      document.getElementById('cd-date').textContent  = 'Deadline: ' + next.date.toLocaleDateString('en-IN', opts);
    }
    updateClock();
    setInterval(updateClock, 1000);

    // ── 5. GSAP Animations ────────────────────────────────
    gsap.registerPlugin(ScrollTrigger);

    // Hero SplitText word reveal
    gsap.fromTo('.hero-headline .word-inner',
      { y: '110%', opacity: 0 },
      { y: '0%', opacity: 1, duration: 1.1, ease: 'elastic.out(1.1,0.7)', stagger: 0.12, delay: 0.2 }
    );

    // Hero sub and CTA fade in
    gsap.fromTo('.hero-sub',
      { opacity: 0, y: 24 },
      { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out', delay: 0.75 }
    );
    gsap.fromTo('.hero-actions',
      { opacity: 0, y: 24 },
      { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out', delay: 0.95 }
    );
    gsap.fromTo('.hero-stats',
      { opacity: 0, y: 30 },
      { opacity: 1, y: 0, duration: 1, ease: 'power3.out', delay: 1.1 }
    );

    // Counter animation for stats
    document.querySelectorAll('[data-count]').forEach(el => {
      const target = parseInt(el.getAttribute('data-count'));
      const suffix = el.innerHTML.replace(/[0-9]/g, '').replace('0','');
      gsap.to({ val: 0 }, {
        val: target, duration: 2.5, ease: 'power2.out', delay: 1.3,
        onUpdate: function() { el.innerHTML = Math.floor(this.targets()[0].val) + suffix; }
      });
    });

    // Scroll reveals
    gsap.utils.toArray('.reveal').forEach(el => {
      gsap.fromTo(el,
        { opacity: 0, y: 40 },
        { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out',
          scrollTrigger: { trigger: el, start: 'top 85%', once: true }
        }
      );
    });

    // Stacking cards
    gsap.utils.toArray('.stack-card').forEach((card, i) => {
      gsap.fromTo(card,
        { opacity: 0, y: 60, scale: 0.96 },
        { opacity: 1, y: 0, scale: 1, duration: 0.7, ease: 'power3.out',
          scrollTrigger: { trigger: card, start: 'top 80%', once: true }
        }
      );
    });

    // Magnetic button effect
    const magBtn = document.querySelector('.hero-shell .magnetic-btn-wrap') || document.getElementById('magnetic-cta');
    if (magBtn) {
      magBtn.addEventListener('mousemove', e => {
        const rect = magBtn.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top  + rect.height / 2;
        const dx = e.clientX - cx;
        const dy = e.clientY - cy;
        gsap.to(magBtn.querySelector('a'), { x: dx * 0.35, y: dy * 0.35, duration: 0.4, ease: 'power2.out' });
      });
      magBtn.addEventListener('mouseleave', () => {
        gsap.to(magBtn.querySelector('a'), { x: 0, y: 0, duration: 0.6, ease: 'elastic.out(1,0.5)' });
      });
    }

    // Bento cards staggered entrance
    gsap.fromTo('.bento-card',
      { opacity: 0, y: 50, scale: 0.97 },
      { opacity: 1, y: 0, scale: 1, duration: 0.7, ease: 'power3.out', stagger: 0.1,
        scrollTrigger: { trigger: '.bento-grid', start: 'top 80%', once: true }
      }
    );

    // Why cards stagger
    gsap.fromTo('.why-card',
      { opacity: 0, y: 40 },
      { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out', stagger: 0.08,
        scrollTrigger: { trigger: '.why-grid', start: 'top 80%', once: true }
      }
    );

    // Founder cards
    gsap.fromTo('.founder-avatar-card, .founder-content',
      { opacity: 0, y: 40 },
      { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out', stagger: 0.15,
        scrollTrigger: { trigger: '.founder-grid', start: 'top 80%', once: true }
      }
    );

    // Nav shrink on scroll
    ScrollTrigger.create({
      start: 'top -60',
      onUpdate: self => {
        document.getElementById('nav').style.background = self.direction === 1
          ? 'rgba(8,15,30,0.95)' : 'rgba(8,15,30,0.7)';
      }
    });

  })();
