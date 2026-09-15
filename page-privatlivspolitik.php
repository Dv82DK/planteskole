<?php
/* Template Name: Privatlivspolitik */
get_header();
?>

<div class="hero" style="min-height:35vh;padding-top:140px;">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="hero-inner" style="max-width:800px;text-align:center;margin:0 auto;">
    <span class="hero-badge">🔒 GDPR</span>
    <h1>Privatlivspolitik</h1>
    <p style="max-width:600px;margin:0 auto 20px;opacity:0.85;">Sidst opdateret: <?php echo date('d. F Y'); ?></p>
    <?php planteskolen_breadcrumbs(); ?>
  </div>
</div>

<section class="section section-alt">
  <div style="max-width:1000px;margin:0 auto;display:grid;grid-template-columns:260px 1fr;gap:50px;align-items:start;">

    <!-- Indholdsfortegnelse -->
    <div class="glass-card reveal" style="position:sticky;top:100px;">
      <h3 style="color:var(--mos);margin-top:0;font-size:0.95rem;text-transform:uppercase;letter-spacing:1px;padding-bottom:12px;border-bottom:2px solid var(--baggrund);">Indhold</h3>
      <ol style="padding-left:18px;margin:0;line-height:2.2;">
        <li><a href="#hvem"        style="color:var(--tekst-lys);font-size:0.9rem;">Hvem er vi?</a></li>
        <li><a href="#data"        style="color:var(--tekst-lys);font-size:0.9rem;">Hvilke data indsamler vi?</a></li>
        <li><a href="#formaal"     style="color:var(--tekst-lys);font-size:0.9rem;">Formål med behandlingen</a></li>
        <li><a href="#cookies"     style="color:var(--tekst-lys);font-size:0.9rem;">Cookies</a></li>
        <li><a href="#deling"      style="color:var(--tekst-lys);font-size:0.9rem;">Deling af oplysninger</a></li>
        <li><a href="#opbevaring"  style="color:var(--tekst-lys);font-size:0.9rem;">Opbevaring</a></li>
        <li><a href="#rettigheder" style="color:var(--tekst-lys);font-size:0.9rem;">Dine rettigheder</a></li>
        <li><a href="#sikkerhed"   style="color:var(--tekst-lys);font-size:0.9rem;">Sikkerhed</a></li>
        <li><a href="#kontakt-gdpr"style="color:var(--tekst-lys);font-size:0.9rem;">Kontakt & klage</a></li>
      </ol>
    </div>

    <!-- Indhold -->
    <div>
      <?php
      $afsnit = [
        ['hvem','01','Hvem er vi?','<p>Denne privatlivspolitik beskriver, hvordan vi hos <strong>Planteskolen</strong> indsamler, anvender og beskytter dine personoplysninger i overensstemmelse med GDPR (EU forordning 2016/679).</p>
        <div style="background:var(--baggrund);border-radius:12px;padding:24px;margin-top:16px;">
          <h4 style="color:var(--mos);margin-top:0;">Dataansvarlig:</h4>
          <ul style="padding:0;line-height:2.2;">
            <li><strong>Virksomhed:</strong> Planteskolen</li>
            <li><strong>CVR:</strong> 00 000 000</li>
            <li><strong>Adresse:</strong> Skovvej 1, 0000 By</li>
            <li><strong>Telefon:</strong> <a href="tel:+4500000000" style="color:var(--mos);font-weight:600;">+45 00 00 00 00</a></li>
            <li><strong>E-mail:</strong> <a href="mailto:info@planteskolen.dk" style="color:var(--mos);font-weight:600;">info@planteskolen.dk</a></li>
          </ul>
        </div>'],
        ['data','02','Hvilke data indsamler vi?','<p style="color:var(--tekst-lys);line-height:1.8;">Vi indsamler oplysninger i forbindelse med køb, henvendelser og brug af vores hjemmeside:</p>
        <ul style="color:var(--tekst-lys);line-height:2.2;padding-left:20px;">
          <li>Navn og adresse (ved levering)</li>
          <li>Telefonnummer og e-mailadresse</li>
          <li>Ordrehistorik og kommunikation</li>
          <li>Tekniske data via cookies (se afsnit 4)</li>
        </ul>'],
        ['formaal','03','Formål med behandlingen','<p style="color:var(--tekst-lys);line-height:1.8;">Vi behandler dine personoplysninger til følgende formål:</p>
        <ul style="color:var(--tekst-lys);line-height:2.2;padding-left:20px;">
          <li>Opfyldelse af ordrer og leverancer</li>
          <li>Besvarelse af henvendelser og rådgivning</li>
          <li>Fakturering og regnskab</li>
          <li>Forbedring af vores hjemmeside og ydelser</li>
          <li>Nyhedsbrev og markedsføring (kun med samtykke)</li>
        </ul>
        <div style="background:#f0fdf4;border-left:4px solid var(--mos-lys);padding:16px 20px;border-radius:0 10px 10px 0;margin-top:16px;color:var(--mos);">
          <strong>Retsgrundlag:</strong> GDPR artikel 6, stk. 1, litra b (opfyldelse af kontrakt) og litra f (legitim interesse). Markedsføring kræver dit samtykke, jf. litra a.
        </div>'],
        ['cookies','04','Cookies','<p style="color:var(--tekst-lys);line-height:1.8;">Vi anvender nødvendige cookies for at hjemmesiden fungerer korrekt, samt statistikcookies (Google Analytics – anonymiseret) hvis du giver samtykke. Du kan til enhver tid tilbagekalde dit samtykke via vores cookiebanner eller ved at kontakte os. Læs vores <a href="/cookiepolitik" style="color:var(--mos);font-weight:600;">cookiepolitik</a> for en detaljeret liste.</p>'],
        ['deling','05','Deling af oplysninger','<p style="color:var(--tekst-lys);line-height:1.8;">Vi deler ikke dine personoplysninger med tredjepart uden dit samtykke, med undtagelse af:</p>
        <ul style="color:var(--tekst-lys);line-height:2.2;padding-left:20px;">
          <li>Leveringspartnere (kun navn og adresse til brug for levering)</li>
          <li>Regnskabs- og betalingssystemer (under databehandleraftale)</li>
          <li>Myndigheder, hvis vi er forpligtet ved lov</li>
        </ul>'],
        ['opbevaring','06','Opbevaring af data','<p style="color:var(--tekst-lys);line-height:1.8;">Bogføringsmateriale og ordredata opbevares i <strong>5 år</strong> jf. bogføringsloven. Henvendelser via kontaktformular og e-mail slettes efter <strong>2 år</strong>. Nyhedsbrevstilmeldinger opbevares indtil du framelder dig eller trækker dit samtykke tilbage.</p>'],
        ['rettigheder','07','Dine rettigheder','<p style="color:var(--tekst-lys);line-height:1.8;">Du har ret til at:</p>
        <ul style="color:var(--tekst-lys);line-height:2.2;padding-left:20px;">
          <li><strong>Indsigt</strong> – se hvilke oplysninger vi har om dig</li>
          <li><strong>Berigtigelse</strong> – få forkerte oplysninger rettet</li>
          <li><strong>Sletning</strong> – under visse betingelser</li>
          <li><strong>Begrænsning</strong> – af behandlingen</li>
          <li><strong>Dataportabilitet</strong> – modtage dine data i et struktureret format</li>
          <li><strong>Indsigelse</strong> – mod visse former for behandling</li>
        </ul>
        <p style="color:var(--tekst-lys);line-height:1.8;margin-top:12px;">Kontakt os på <a href="mailto:info@planteskolen.dk" style="color:var(--mos);font-weight:600;">info@planteskolen.dk</a> for at gøre brug af dine rettigheder.</p>'],
        ['sikkerhed','08','Sikkerhed','<p style="color:var(--tekst-lys);line-height:1.8;">Vi beskytter dine oplysninger med SSL-kryptering, adgangskontrol og regelmæssige sikkerhedsopdateringer. Adgang til systemer med persondata er begrænset til relevante medarbejdere, der alle er underlagt tavshedspligt.</p>'],
        ['kontakt-gdpr','09','Kontakt & klage','<div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
          <div style="background:var(--baggrund);border-radius:12px;padding:22px;">
            <h4 style="color:var(--mos);margin-top:0;">📬 Kontakt os</h4>
            <ul style="padding:0;line-height:2.2;">
              <li>📧 <a href="mailto:info@planteskolen.dk" style="color:var(--mos);font-weight:600;">info@planteskolen.dk</a></li>
              <li>📞 <a href="tel:+4500000000" style="color:var(--mos);font-weight:600;">+45 00 00 00 00</a></li>
              <li>📍 Skovvej 1, 0000 By</li>
            </ul>
          </div>
          <div style="background:var(--baggrund);border-radius:12px;padding:22px;">
            <h4 style="color:var(--mos);margin-top:0;">⚖️ Datatilsynet</h4>
            <ul style="padding:0;line-height:2.2;">
              <li>📧 <a href="mailto:dt@datatilsynet.dk" style="color:var(--tekst-lys);">dt@datatilsynet.dk</a></li>
              <li>📞 33 19 32 00</li>
              <li>🌐 <a href="https://www.datatilsynet.dk" target="_blank" style="color:var(--tekst-lys);">datatilsynet.dk</a></li>
            </ul>
          </div>
        </div>'],
      ];
      foreach ( $afsnit as $a ) :
      ?>
      <div class="glass-card reveal" id="<?php echo $a[0]; ?>" style="margin-bottom:24px;scroll-margin-top:100px;">
        <div style="display:grid;grid-template-columns:50px 1fr;gap:20px;align-items:start;">
          <div style="font-size:1.8rem;font-weight:800;color:#e5e7eb;line-height:1;"><?php echo $a[1]; ?></div>
          <div>
            <h2 style="color:var(--mos);font-size:1.3rem;margin-top:0;margin-bottom:16px;"><?php echo $a[2]; ?></h2>
            <?php echo $a[3]; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
