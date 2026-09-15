<?php
/* Template Name: Priser & Pakker */
get_header();
?>

<div class="hero" style="min-height:45vh;padding-top:140px;">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="hero-inner" style="max-width:800px;text-align:center;margin:0 auto;">
    <span class="hero-badge">💚 Gennemsigtige priser</span>
    <h1>Priser & pakker</h1>
    <p style="max-width:600px;margin:0 auto 20px;">Vælg den løsning der passer til din have og dit budget</p>
    <?php planteskolen_breadcrumbs(); ?>
  </div>
</div>

<section class="section section-alt">
  <div style="max-width:1100px;margin:0 auto;">
    <div class="section-header">
      <span class="section-badge">Plantningspakker</span>
      <h2>Vælg din løsning</h2>
      <p>Alle priser er vejledende ekskl. moms. Endelig pris aftales efter besigtigelse og behovsanalyse.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:28px;">
      <?php
      $pakker = [
        ['Havestart',   '4.995',  'pr. dag', 'Perfekt til den lille have eller et afgrænset projekt',  'Besigtigelse inkluderet|Op til 4 timers plantning|Op til 20 planter|Vejledning medfølger', ''],
        ['Havepakke',   '9.995',  'pr. dag', 'Til mellemstore haver med behov for professionel anlæg', 'Alt i Havestart|Op til 8 timers plantning|Op til 60 planter|Sæsonplan medfølger', 'pakke-badge'],
        ['Totalanlæg',  'Ring',   'for pris', 'Til store haver og erhvervsprojekter fra bunden',       'Alt i Havepakke|Fuldt havedesign|Ubegrænset plantning|Dedikeret anlægsgartner', ''],
      ];
      foreach ( $pakker as $p ) :
        $highlight = $p[5] ? 'style="background:var(--mos);color:#fff;transform:scale(1.03);position:relative;"' : 'style="background:var(--hvid);border:1px solid #e8e4dc;"';
      ?>
      <div class="glass-card reveal" <?php echo $highlight; ?>>
        <?php if($p[5]) echo '<span style="position:absolute;top:-12px;left:50%;transform:translateX(-50%);background:var(--guld);color:#fff;padding:4px 14px;border-radius:50px;font-size:0.8rem;font-weight:700;">Mest valgt</span>'; ?>
        <h3 style="color:<?php echo $p[5]?'#fff':'var(--mos)'; ?>;margin-top:0;"><?php echo $p[0]; ?></h3>
        <div style="font-family:'Playfair Display',Georgia,serif;font-size:2.2rem;font-weight:800;color:var(--guld);margin:10px 0;">
          <?php echo $p[1]; ?> <span style="font-size:0.9rem;font-weight:400;opacity:0.7;">kr/<?php echo $p[2]; ?></span>
        </div>
        <p style="opacity:0.85;margin-bottom:20px;"><?php echo $p[3]; ?></p>
        <ul style="line-height:2;margin-bottom:24px;">
          <?php foreach(explode('|',$p[4]) as $i) echo '<li>✓ ' . $i . '</li>'; ?>
        </ul>
        <a href="#kontakt" class="btn-primary" style="display:block;text-align:center;background:<?php echo $p[5]?'var(--guld)':'var(--mos)'; ?>;color:#fff;">
          <?php echo $p[1]==='Ring'?'Kontakt os':'Vælg pakke'; ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:50px;padding:36px;background:var(--hvid);border-radius:var(--radius);box-shadow:var(--skygge);">
      <h3 style="color:var(--mos);margin-top:0;">💡 Timepris & enkeltopgaver</h3>
      <p style="color:var(--tekst-lys);max-width:600px;margin:0 auto 16px;">
        Normal timepris: <strong>695 kr./time</strong> ekskl. moms. Vi tilbyder også fast pris på enkeltopgaver som beplantning af et enkelt bed, levering og plantning af hæk, eller sæsonklar terrasseindretning.
      </p>
      <a href="#kontakt" class="btn-primary" style="background:var(--mos);color:#fff;">Få et uforpligtende tilbud</a>
    </div>
  </div>
</section>

<!-- Kontakt -->
<section class="contact-section" id="kontakt">
  <div class="contact-inner">
    <div class="contact-info reveal">
      <h2>Få et tilbud</h2>
      <p>Fortæl os om dit projekt – vi vender tilbage inden for en hverdag med et konkret tilbud.</p>
      <ul class="contact-details">
        <li>📞 <a href="tel:+4500000000">+45 00 00 00 00</a></li>
        <li>✉️ <a href="mailto:info@planteskolen.dk">info@planteskolen.dk</a></li>
        <li>📍 Skovvej 1, 0000 By</li>
        <li>🕐 Man–Fre: 09:00 – 17:00</li>
      </ul>
    </div>
    <form class="contact-form reveal" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
      <input type="hidden" name="action" value="planteskolen_contact_submit">
      <?php wp_nonce_field( 'planteskolen_contact', 'planteskolen_contact_nonce' ); ?>
      <?php if ( isset($_GET['sendt']) && $_GET['sendt'] == '1' ) : ?>
        <div style="background:#ecfdf5;border:2px solid #10b981;padding:16px;border-radius:10px;margin-bottom:20px;color:#065f46;font-weight:600;">
          ✅ Tak! Vi kontakter dig hurtigst muligt.
        </div>
      <?php endif; ?>
      <h3 style="margin-top:0;color:var(--mos);font-size:1.3rem;">Send en forespørgsel</h3>
      <div class="form-row">
        <input type="text"  name="name"  placeholder="Dit navn" required>
        <input type="tel"   name="phone" placeholder="Telefonnummer">
      </div>
      <input type="email" name="email" placeholder="E-mail" required>
      <select name="emne">
        <option value="">Vælg pakke...</option>
        <option value="havestart">Havestart-pakke</option>
        <option value="havepakke">Havepakke</option>
        <option value="totalanlaeg">Totalanlæg</option>
        <option value="timepris">Timepris / enkeltopgave</option>
        <option value="andet">Andet</option>
      </select>
      <textarea name="message" rows="5" placeholder="Beskriv dit projekt – areal, planter, ønsker..." required></textarea>
      <button type="submit">Send forespørgsel 🌿</button>
    </form>
  </div>
</section>

<?php get_footer(); ?>
