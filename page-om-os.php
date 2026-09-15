<?php
/* Template Name: Om os */
get_header();
?>

<div class="hero" style="min-height:50vh;padding-top:140px;">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="hero-inner" style="max-width:800px;text-align:center;margin:0 auto;">
    <span class="hero-badge">🌿 Din lokale planteskole</span>
    <h1>Om os</h1>
    <p style="max-width:600px;margin:0 auto 20px;">Mød folkene bag din lokale planteskole</p>
    <?php planteskolen_breadcrumbs(); ?>
  </div>
</div>

<!-- Intro -->
<section class="section">
  <div style="max-width:1100px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:70px;align-items:center;">
    <div class="reveal">
      <span class="section-badge">Siden <?php echo date('Y') - 25; ?></span>
      <h2 style="font-family:'Playfair Display',Georgia,serif;color:var(--mos);font-size:2rem;font-weight:800;margin:10px 0 20px;letter-spacing:-0.5px;">
        Lokalt forankret.<br>Dyb plantefaglighed.
      </h2>
      <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:16px;">
        Vi er en uafhængig planteskole med mere end 25 års erfaring. Vores mission er enkel: at give dig den faglige rådgivning og de bedste planter – uanset om du er privat haveentusiast eller professionel anlægsgartner.
      </p>
      <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:24px;">
        Hos os er du altid i direkte kontakt med en planteekspert – ikke en kassemedarbejder. Vi tror på langsigtede relationer og er stolte af at have kunder, der har handlet hos os i over 20 år.
      </p>
      <div style="display:flex;flex-wrap:wrap;gap:10px;">
        <span style="background:var(--baggrund);border:1px solid #e8e4dc;padding:8px 16px;border-radius:50px;font-size:0.9rem;font-weight:600;color:var(--mos);">✅ 25+ års erfaring</span>
        <span style="background:var(--baggrund);border:1px solid #e8e4dc;padding:8px 16px;border-radius:50px;font-size:0.9rem;font-weight:600;color:var(--mos);">✅ 2.500+ plantesorter</span>
        <span style="background:var(--baggrund);border:1px solid #e8e4dc;padding:8px 16px;border-radius:50px;font-size:0.9rem;font-weight:600;color:var(--mos);">✅ 2 års garanti</span>
        <span style="background:var(--baggrund);border:1px solid #e8e4dc;padding:8px 16px;border-radius:50px;font-size:0.9rem;font-weight:600;color:var(--mos);">✅ Gratis rådgivning</span>
      </div>
    </div>
    <div class="reveal">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('large', ['style'=>'width:100%;border-radius:20px;box-shadow:var(--skygge-hover);']); ?>
      <?php else : ?>
        <div style="background:linear-gradient(135deg,var(--mos),var(--mos-lys));height:460px;border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:8rem;box-shadow:var(--skygge-hover);">
          🌿
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Statistik -->
<section class="stats-section">
  <div class="stats-inner">
    <div class="stat-item reveal">
      <span class="stat-number" data-target="25">0</span>
      <span class="stat-label">Års erfaring</span>
    </div>
    <div class="stat-item reveal">
      <span class="stat-number" data-target="2500">0</span>
      <span class="stat-label">Plantesorter</span>
    </div>
    <div class="stat-item reveal">
      <span class="stat-number" data-target="98">0</span>
      <span class="stat-label">% Tilfredse kunder</span>
    </div>
    <div class="stat-item reveal">
      <span class="stat-number" data-target="3200">0</span>
      <span class="stat-label">Haver vi har hjulpet</span>
    </div>
  </div>
</section>

<!-- Team -->
<section class="section section-alt">
  <div style="max-width:1100px;margin:0 auto;">
    <div class="section-header reveal">
      <span class="section-badge">Mød os</span>
      <h2>Vores team</h2>
      <p>Erfarne og engagerede plantefolk med passion for haven</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-top:50px;">

      <div class="glass-card reveal" style="padding:0;overflow:hidden;">
        <div style="height:260px;overflow:hidden;background:linear-gradient(135deg,var(--mos),var(--mos-lys));display:flex;align-items:center;justify-content:center;font-size:6rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/images/team1.jpg"
               alt="Planteekspert"
               style="width:100%;height:100%;object-fit:cover;opacity:0.9;"
               onerror="this.style.display='none'">
        </div>
        <div style="padding:26px;">
          <h3 style="color:var(--mos);margin:0 0 4px;">Henrik Skovmand</h3>
          <span style="color:var(--guld);font-size:0.9rem;font-weight:600;display:block;margin-bottom:12px;">Havebrugsuddannet & Ejer</span>
          <p style="color:var(--tekst-lys);font-size:0.92rem;line-height:1.6;margin-bottom:14px;">25 års erfaring med planteskoledrift. Specialist i hjemmehørende træer og klimarobuste planter.</p>
          <a href="mailto:hs@planteskolen.dk" style="color:var(--mos);font-weight:600;font-size:0.9rem;">✉️ hs@planteskolen.dk</a>
        </div>
      </div>

      <div class="glass-card reveal" style="padding:0;overflow:hidden;">
        <div style="height:260px;overflow:hidden;background:linear-gradient(135deg,var(--mos-lys),#1a4030);display:flex;align-items:center;justify-content:center;font-size:6rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/images/team2.jpg"
               alt="Planterådgiver"
               style="width:100%;height:100%;object-fit:cover;opacity:0.9;"
               onerror="this.style.display='none'">
        </div>
        <div style="padding:26px;">
          <h3 style="color:var(--mos);margin:0 0 4px;">Lise Rosenvinge</h3>
          <span style="color:var(--guld);font-size:0.9rem;font-weight:600;display:block;margin-bottom:12px;">Gartner & Planterådgiver</span>
          <p style="color:var(--tekst-lys);font-size:0.92rem;line-height:1.6;margin-bottom:14px;">Specialist i stauder, roser og perennekombinationer. 15 års erfaring med havedesign og plantning.</p>
          <a href="mailto:lr@planteskolen.dk" style="color:var(--mos);font-weight:600;font-size:0.9rem;">✉️ lr@planteskolen.dk</a>
        </div>
      </div>

      <div class="glass-card reveal" style="padding:0;overflow:hidden;">
        <div style="height:260px;overflow:hidden;background:linear-gradient(135deg,#1a4030,var(--mos));display:flex;align-items:center;justify-content:center;font-size:6rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/images/team3.jpg"
               alt="Anlægsgartner"
               style="width:100%;height:100%;object-fit:cover;opacity:0.9;"
               onerror="this.style.display='none'">
        </div>
        <div style="padding:26px;">
          <h3 style="color:var(--mos);margin:0 0 4px;">Bo Naturvej</h3>
          <span style="color:var(--guld);font-size:0.9rem;font-weight:600;display:block;margin-bottom:12px;">Anlægsgartner</span>
          <p style="color:var(--tekst-lys);font-size:0.92rem;line-height:1.6;margin-bottom:14px;">20 års erfaring med haveanlæg og beplantning. Din kontaktperson ved plantning og store projekter.</p>
          <a href="mailto:bn@planteskolen.dk" style="color:var(--mos);font-weight:600;font-size:0.9rem;">✉️ bn@planteskolen.dk</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Tidslinje -->
<section class="section">
  <div style="max-width:800px;margin:0 auto;">
    <div class="section-header reveal">
      <span class="section-badge">Vores historie</span>
      <h2>Fra <?php echo date('Y') - 25; ?> til i dag</h2>
    </div>

    <div style="position:relative;margin-top:50px;padding-left:40px;">
      <div style="position:absolute;left:0;top:0;bottom:0;width:3px;background:linear-gradient(var(--mos),var(--guld));border-radius:2px;"></div>

      <?php
      $tidslinje = [
        [date('Y')-25, 'Planteskolen grundlægges', 'Henrik Skovmand åbner planteskolen med et lille udvalg af lokale planter og en stor passion for grønne haver.'],
        [date('Y')-18, 'Udvidelse af sortimentet', 'Vi udvider til over 1.000 plantesorter og ansætter vores første planterådgiver.'],
        [date('Y')-12, 'Plantningsservice lanceres', 'Vi begynder at tilbyde professionel plantning og haveanlæg – og introducerer vores 2-årige overlevelsesgaranti.'],
        [date('Y')-5,  '2.500+ plantesorter', 'I dag fører vi over 2.500 plantesorter og har hjulpet mere end 3.200 haver i lokalområdet.'],
        [date('Y'),    '25 år og stadig i vækst', 'Vi fejrer 25 år med nyt drivhus, ny webshop og samme passion for at hjælpe dig med din have.'],
      ];
      foreach ( $tidslinje as $t ) :
      ?>
      <div class="reveal" style="position:relative;margin-bottom:44px;display:flex;gap:28px;align-items:flex-start;">
        <div style="position:absolute;left:-47px;top:6px;width:14px;height:14px;background:var(--guld);border-radius:50%;border:3px solid #fff;box-shadow:0 0 0 2px var(--guld);"></div>
        <div style="min-width:60px;font-size:1.2rem;font-weight:800;color:var(--mos);"><?php echo $t[0]; ?></div>
        <div>
          <h4 style="color:var(--mos);margin:0 0 6px;"><?php echo $t[1]; ?></h4>
          <p style="color:var(--tekst-lys);font-size:0.95rem;line-height:1.6;margin:0;"><?php echo $t[2]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section reveal">
  <div class="cta-inner">
    <h2>Lad os hjælpe dig med din have</h2>
    <p>Vi tilbyder altid en gratis og uforpligtende rådgivning – fysisk i planteskolen eller over telefon.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a href="/kontakt" class="btn-primary">🌿 Kontakt os</a>
      <a href="tel:+4500000000" class="btn-outline">📞 +45 00 00 00 00</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
