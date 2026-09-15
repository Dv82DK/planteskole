<?php
/* Template Name: Kontakt */
get_header();
?>

<div class="hero" style="min-height:40vh;padding-top:140px;">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="hero-inner" style="max-width:800px;text-align:center;margin:0 auto;">
    <span class="hero-badge">📞 Vi sidder klar</span>
    <h1>Kontakt os</h1>
    <p style="max-width:600px;margin:0 auto 20px;">Vi hjælper dig med planter, plantning og rådgivning – ring, skriv eller kig forbi</p>
  </div>
</div>

<section class="contact-section">
  <div class="contact-inner">
    <div class="contact-info reveal">
      <h2>Kontaktoplysninger</h2>
      <p>Har du spørgsmål om planter, sortiment, plantning eller rådgivning? Vi er klar til at hjælpe dig på alle måder.</p>

      <ul class="contact-details">
        <li>📞 <a href="tel:+4500000000">+45 00 00 00 00</a></li>
        <li>✉️ <a href="mailto:info@planteskolen.dk">info@planteskolen.dk</a></li>
        <li>📍 Skovvej 1, 0000 By</li>
        <li>🕐 Man–Fre: 09:00 – 17:00 | Lør: 10:00 – 15:00</li>
      </ul>

      <div style="margin-top:30px;padding:24px;background:var(--baggrund);border-radius:var(--radius);border-left:4px solid var(--guld);">
        <h4 style="color:var(--mos);margin-top:0;">🌿 Gratis rådgivning</h4>
        <p style="color:var(--tekst-lys);margin:0;">Vi tilbyder altid gratis og uforpligtende planterådgivning. Kom forbi i åbningstiden eller book et telefonmøde, så finder vi de rigtige planter til din have.</p>
      </div>

      <?php $map = get_theme_mod('planteskolen_google_maps_embed', ''); ?>
      <?php if ( $map ) : ?>
        <div style="margin-top:24px;border-radius:14px;overflow:hidden;box-shadow:var(--skygge);">
          <iframe
            src="<?php echo esc_url($map); ?>"
            width="100%" height="280"
            style="border:0;" loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      <?php endif; ?>
    </div>

    <div class="reveal">
      <?php if ( isset($_GET['sendt']) && $_GET['sendt'] == '1' ) : ?>
        <div style="background:#ecfdf5;border:2px solid #10b981;padding:22px;border-radius:12px;margin-bottom:30px;color:#065f46;font-weight:600;font-size:1.05rem;">
          ✅ Tak for din henvendelse! Vi vender tilbage inden for en hverdag.
        </div>
      <?php endif; ?>

      <form class="contact-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
        <input type="hidden" name="action" value="planteskolen_contact_submit">
        <?php wp_nonce_field( 'planteskolen_contact', 'planteskolen_contact_nonce' ); ?>

        <h3 style="margin-top:0;color:var(--mos);font-size:1.3rem;">Send os en besked</h3>

        <div class="form-row">
          <input type="text" name="name"  placeholder="Dit navn" required>
          <input type="tel"  name="phone" placeholder="Telefonnummer">
        </div>
        <input type="email" name="email" placeholder="E-mail adresse" required>
        <select name="emne">
          <option value="">Vælg emne...</option>
          <option value="planter">Spørgsmål om planter</option>
          <option value="plantning">Plantningsservice</option>
          <option value="haveanlæg">Stort haveanlæg</option>
          <option value="raadgivning">Gratis rådgivning</option>
          <option value="levering">Levering</option>
          <option value="tilbud">Tilbud & priser</option>
          <option value="andet">Andet</option>
        </select>
        <textarea name="message" rows="5" placeholder="Beskriv din henvendelse – jo mere du fortæller, jo bedre kan vi forberede os..." required></textarea>
        <button type="submit">Send besked 🌿</button>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
