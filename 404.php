<?php get_header(); ?>

<main style="min-height:70vh;display:flex;align-items:center;justify-content:center;text-align:center;padding:140px 24px 80px;">
  <div>
    <div style="font-size:6rem;margin-bottom:20px;animation:decoFloat 4s ease-in-out infinite;" aria-hidden="true">🌿</div>
    <span class="section-badge" style="display:inline-block;margin-bottom:20px;">404 – Side ikke fundet</span>
    <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:clamp(2rem,5vw,3.5rem);color:var(--mos);margin:0 0 16px;">
      Vi kan ikke finde siden
    </h1>
    <p style="font-size:1.1rem;color:var(--tekst-lys);max-width:480px;margin:0 auto 36px;line-height:1.75;">
      Siden eksisterer ikke eller er blevet flyttet. Lad os guide dig hen til noget grønt i stedet.
    </p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a href="/" class="btn-primary" style="background:var(--mos);color:#fff;padding:14px 28px;border-radius:50px;font-weight:700;display:inline-flex;align-items:center;gap:8px;">
        🏡 Tilbage til forsiden
      </a>
      <a href="/planter" style="border:2px solid var(--mos);color:var(--mos);padding:12px 26px;border-radius:50px;font-weight:700;display:inline-flex;align-items:center;gap:8px;transition:var(--transition);">
        🌱 Se vores planter
      </a>
    </div>
  </div>
</main>

<?php get_footer(); ?>
