<?php get_header(); ?>

<?php
/* ── Video / poster fra Customizer ── */
$video_id     = get_theme_mod( 'planteskolen_hero_video', '' );
$video_url    = $video_id ? wp_get_attachment_url( absint( $video_id ) ) : '';
$poster       = get_theme_mod( 'planteskolen_hero_poster', '' );
$overlay      = get_theme_mod( 'planteskolen_hero_overlay', 65 );
$video_mobile = get_theme_mod( 'planteskolen_hero_video_mobile', false );
?>


<section class="hero <?php echo $video_url ? 'has-video' : ''; ?>">

  <!-- Botaniske blob-baggrunde (altid synlige) -->
  <div class="hero-blob-1"></div>
  <div class="hero-blob-2"></div>

  <!-- Animeret grid-baggrund -->
  <div class="hero-grid-bg"></div>

  <!-- Dekorativt botanisk element -->
  <div class="hero-deco" aria-hidden="true">🌿</div>

  <?php if ( $video_url ) : ?>

    <div class="hero-video-wrapper <?php echo $video_mobile ? '' : 'hide-on-mobile'; ?>"
         <?php if ( $poster ) echo 'style="background-image:url(' . esc_url($poster) . ');background-size:cover;background-position:center;"'; ?>>
      <video autoplay muted loop playsinline
        <?php if ( $poster ) echo 'poster="' . esc_url($poster) . '"'; ?>>
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
      </video>
    </div>

    <div class="hero-overlay"
         style="background: rgba(27,67,50,<?php echo esc_attr($overlay / 100); ?>);">
    </div>

  <?php else : ?>

    <div class="hero-glow"></div>

  <?php endif; ?>

  <!-- Hero tekst -->
  <div class="hero-inner">
    <span class="hero-badge">
      <span class="saeson-dot"></span>
      🍂 Efterårssæson 2025 – Plantetid for træer og buske
    </span>
    <h1>Dyrk din<br><span>drømmehave</span></h1>
    <p>Hos os finder du et bredt udvalg af høj­kvalitets­planter, buske og træer – dyrket med omtanke for naturen. Vi rådgiver dig fra valg til plantning.</p>
    <div class="hero-buttons">
      <a href="/planter" class="btn-primary">🌱 Se vores planter</a>
      <a href="#kontakt" class="btn-outline">📞 Gratis rådgivning</a>
    </div>
  </div>

</section>

<!-- Info-kort -->
<div class="info-cards">
  <div class="glass-card reveal">
    <div class="icon">🌳</div>
    <h3>Træer & Buske</h3>
    <p>Hjemmehørende og udvalgte sorter til haven – klar til plantning.</p>
    <a href="/traeer-buske" class="arrow">Se udvalget →</a>
  </div>
  <div class="glass-card reveal">
    <div class="icon">🌿</div>
    <h3>Hækplanter</h3>
    <p>Levende hegn i alle størrelser. Vi hjælper med valg og mål.</p>
    <a href="/haekplanter" class="arrow">Se hækplanter →</a>
  </div>
  <div class="glass-card reveal">
    <div class="icon">🌸</div>
    <h3>Stauder & Blomster</h3>
    <p>Farverige, flerårige planter til alle hjørner af haven.</p>
    <a href="/stauder" class="arrow">Se stauder →</a>
  </div>
  <div class="glass-card reveal">
    <div class="icon">🏡</div>
    <h3>Plantning & Anlæg <span class="status-dot"></span></h3>
    <p>Vi planter for dig – med 2 års overlevelsesgaranti.</p>
    <a href="/plantning" class="arrow">Læs mere →</a>
  </div>
</div>


<!-- Udvalgte planter -->
<section class="section reveal">
  <div class="section-header">
    <span class="section-badge">Sæsonens udvalg</span>
    <h2>Populære planter lige nu</h2>
    <p>Håndplukkede planter klar til din have – nye varer tilføjes løbende</p>
  </div>

  <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap;margin-bottom:44px;">
    <button class="filter-pill active" data-filter="alle">Alle</button>
    <button class="filter-pill" data-filter="traeer">Træer</button>
    <button class="filter-pill" data-filter="haek">Hæk</button>
    <button class="filter-pill" data-filter="stauder">Stauder</button>
    <button class="filter-pill" data-filter="potte">Potteplanter</button>
  </div>

  <div class="planter-grid">

    <div class="plante-kort reveal" data-kategori="traeer">
      <div class="plante-billede">
        🌲
        <span class="plante-maerke saeson">Sæsonvare</span>
      </div>
      <div class="plante-info">
        <span class="plante-latinsk">Quercus robur</span>
        <h3>Stilk-eg</h3>
        <div class="plante-meta">
          <span class="plante-tag">☀️ Sol</span>
          <span class="plante-tag">❄️ Frostfast</span>
        </div>
        <div class="plante-footer">
          <div class="plante-pris">249 kr <span class="per">/ stk</span></div>
          <a href="/traeer-buske/stilk-eg" class="btn-kurv">Læs mere →</a>
        </div>
      </div>
    </div>

    <div class="plante-kort reveal" data-kategori="haek">
      <div class="plante-billede">
        🌿
        <span class="plante-maerke tilbud">Tilbud 20%</span>
      </div>
      <div class="plante-info">
        <span class="plante-latinsk">Carpinus betulus</span>
        <h3>Avnbøg</h3>
        <div class="plante-meta">
          <span class="plante-tag">🌥️ Halvskygge</span>
          <span class="plante-tag">❄️ Frostfast</span>
        </div>
        <div class="plante-footer">
          <div class="plante-pris">39 kr <span class="per">/ stk</span></div>
          <a href="/haekplanter/avnboeg" class="btn-kurv">Læs mere →</a>
        </div>
      </div>
    </div>

    <div class="plante-kort reveal" data-kategori="stauder">
      <div class="plante-billede">
        🌸
        <span class="plante-maerke">Nyhed</span>
      </div>
      <div class="plante-info">
        <span class="plante-latinsk">Echinacea purpurea</span>
        <h3>Solhat</h3>
        <div class="plante-meta">
          <span class="plante-tag">☀️ Sol</span>
          <span class="plante-tag">🦋 Bivenlig</span>
        </div>
        <div class="plante-footer">
          <div class="plante-pris">79 kr <span class="per">/ stk</span></div>
          <a href="/stauder/solhat" class="btn-kurv">Læs mere →</a>
        </div>
      </div>
    </div>

    <div class="plante-kort reveal" data-kategori="potte">
      <div class="plante-billede">
        🪴
        <span class="plante-maerke saeson">Sæsonvare</span>
      </div>
      <div class="plante-info">
        <span class="plante-latinsk">Ficus lyrata</span>
        <h3>Figenbladsplante</h3>
        <div class="plante-meta">
          <span class="plante-tag">🌥️ Halvskygge</span>
          <span class="plante-tag">💧 Moderat</span>
        </div>
        <div class="plante-footer">
          <div class="plante-pris">349 kr <span class="per">/ stk</span></div>
          <a href="/potteplanter/figen" class="btn-kurv">Læs mere →</a>
        </div>
      </div>
    </div>

  </div>

  <div style="text-align:center;margin-top:50px;">
    <a href="/planter" class="btn-naturlig" style="display:inline-flex;align-items:center;gap:10px;">
      🌱 Se hele sortimentet
      <span style="background:rgba(255,255,255,0.2);padding:2px 12px;border-radius:20px;font-size:0.82rem;">2.500+</span>
    </a>
  </div>
</section>


<!-- Featured split-baner -->
<div class="featured-split">
  <div class="featured-split-visuel">
    <span aria-hidden="true">🌳</span>
  </div>
  <div class="featured-split-tekst">
    <span class="section-badge">Vores service</span>
    <h2>Vi planter – du nyder</h2>
    <p class="reveal">
      Vores erfarne team planlægger og anlægger hele haven fra bunden, eller hjælper dig med at plante de træer og buske du har valgt.
      Alt udføres med respekt for jordens og de omkringliggende planters behov.
    </p>
    <ul class="featured-liste reveal">
      <li><span class="liste-check">✓</span> Gratis besigtigelse og tilbud uden forpligtelse</li>
      <li><span class="liste-check">✓</span> Erfarne gartnere med over 20 års praksis</li>
      <li><span class="liste-check">✓</span> 2-årig overlevelsesgaranti på alle plantede planter</li>
      <li><span class="liste-check">✓</span> Hjemmehørende og klimarobuste sorter</li>
      <li><span class="liste-check">✓</span> Efterbehandling og vejledning inkluderet</li>
    </ul>
    <a href="/plantning" class="btn-naturlig reveal">🌿 Læs om plantningsservice</a>
  </div>
</div>


<!-- Statistik -->
<section class="stats-section">
  <div class="stats-inner">
    <div class="stat-item reveal">
      <span class="stat-number" data-target="2500">0</span>
      <span class="stat-label">Plantesorter i sortimentet</span>
    </div>
    <div class="stat-item reveal">
      <span class="stat-number" data-target="3200">0</span>
      <span class="stat-label">Haver vi har hjulpet</span>
    </div>
    <div class="stat-item reveal">
      <span class="stat-number" data-target="98">0</span>
      <span class="stat-label">% Tilfredse kunder</span>
    </div>
    <div class="stat-item reveal">
      <span class="stat-number" data-target="25">0</span>
      <span class="stat-label">Års erfaring</span>
    </div>
  </div>
</section>


<!-- Sæsonkalender -->
<section class="section" style="background:var(--mos);color:var(--hvid);">
  <div class="section-header reveal" style="max-width:700px;margin:0 auto 60px;">
    <span class="section-badge" style="background:rgba(149,213,178,0.2);color:var(--lime);border-color:rgba(149,213,178,0.3);">Sæsonkalender</span>
    <h2 style="color:var(--hvid);">Hvad planter du hvornår?</h2>
    <p style="color:rgba(255,255,255,0.75);">Vi guider dig til de rigtige planter i de rigtige sæsoner</p>
  </div>

  <div class="saesoner-grid">
    <div class="saeson-kort reveal">
      <span class="saeson-ikon">🌸</span>
      <h3>Forår</h3>
      <ul class="saeson-planter">
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#95D5B2;"></span>Stauder og sommerblomster</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#95D5B2;"></span>Roser og klatreplanter</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#95D5B2;"></span>Frugtbuske</li>
      </ul>
    </div>
    <div class="saeson-kort reveal">
      <span class="saeson-ikon">☀️</span>
      <h3>Sommer</h3>
      <ul class="saeson-planter">
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#F4A261;"></span>Krukker og terrasseplanter</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#F4A261;"></span>Tørketolerante buske</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#F4A261;"></span>Bambus og havegræs</li>
      </ul>
    </div>
    <div class="saeson-kort reveal">
      <span class="saeson-ikon">🍂</span>
      <h3>Efterår</h3>
      <ul class="saeson-planter">
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#E76F51;"></span>Træer og buske (bedste tid!)</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#E76F51;"></span>Hækplanter og espalier</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#E76F51;"></span>Løgblomster til foråret</li>
      </ul>
    </div>
    <div class="saeson-kort reveal">
      <span class="saeson-ikon">❄️</span>
      <h3>Vinter</h3>
      <ul class="saeson-planter">
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#D8F3DC;"></span>Vinterhårde stauder</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#D8F3DC;"></span>Stedsegrønne buske</li>
        <li class="saeson-plante"><span class="saeson-dot-lille" style="background:#D8F3DC;"></span>Juletræer og grønt</li>
      </ul>
    </div>
  </div>
</section>


<!-- CTA -->
<section class="cta-section reveal">
  <div class="cta-inner">
    <h2>Klar til en have der blomstrer hele året?</h2>
    <p>Book en gratis rådgivning og lad os finde de rigtige planter til netop din have – jord, lys og ønsker taget i betragtning.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a href="#kontakt" class="btn-primary">🌿 Book gratis rådgivning</a>
      <a href="tel:+4500000000" class="btn-outline">📞 Ring til os</a>
    </div>
  </div>
</section>


<!-- Kontakt -->
<section class="contact-section" id="kontakt">
  <div class="contact-inner">
    <div class="contact-info reveal">
      <h2>Kontakt os</h2>
      <p>Har du spørgsmål om planter, plantning eller rådgivning? Skriv eller ring – vi vender tilbage inden for en hverdag.</p>

      <ul class="contact-details">
        <li>📞 <a href="tel:+4500000000">+45 00 00 00 00</a></li>
        <li>✉️ <a href="mailto:info@planteskolen.dk">info@planteskolen.dk</a></li>
        <li>📍 Skovvej 1, 0000 By</li>
        <li>🕐 Man–Fre: 09:00 – 17:00 | Lør: 10:00 – 15:00</li>
      </ul>

      <?php $map = get_theme_mod('planteskolen_google_maps_embed', ''); ?>
      <?php if ( $map ) : ?>
        <div style="margin-top:24px;border-radius:14px;overflow:hidden;box-shadow:var(--skygge);">
          <iframe src="<?php echo esc_url($map); ?>" width="100%" height="260" style="border:0;" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      <?php endif; ?>
    </div>

    <form class="contact-form reveal" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
      <input type="hidden" name="action" value="planteskolen_contact_submit">
      <?php wp_nonce_field( 'planteskolen_contact', 'planteskolen_contact_nonce' ); ?>

      <?php if ( isset($_GET['sendt']) && $_GET['sendt'] == '1' ) : ?>
        <div style="background:#ecfdf5;border:2px solid #10b981;padding:16px;border-radius:10px;margin-bottom:20px;color:#065f46;font-weight:600;">
          ✅ Tak for din henvendelse! Vi kontakter dig hurtigst muligt.
        </div>
      <?php endif; ?>

      <h3 style="margin-top:0;color:var(--mos);font-size:1.3rem;">Send os en besked</h3>

      <div class="form-row">
        <input type="text" name="name" placeholder="Dit navn" required>
        <input type="tel"  name="phone" placeholder="Telefonnummer">
      </div>
      <input type="email" name="email" placeholder="E-mail" required>
      <select name="emne">
        <option value="">Vælg emne...</option>
        <option value="planter">Spørgsmål om planter</option>
        <option value="plantning">Plantningsservice</option>
        <option value="haveanlæg">Stort haveanlæg</option>
        <option value="raadgivning">Gratis rådgivning</option>
        <option value="levering">Levering</option>
        <option value="andet">Andet</option>
      </select>
      <textarea name="message" rows="5" placeholder="Beskriv dit projekt eller spørgsmål..." required></textarea>
      <button type="submit">Send besked 🌿</button>
    </form>
  </div>
</section>

<?php get_footer(); ?>
