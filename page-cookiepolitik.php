<?php
/*
Template Name: Cookiepolitik
*/
get_header();
?>

<div class="hero" style="min-height:35vh;padding-top:140px;align-items:flex-end;padding-bottom:60px;">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="hero-inner" style="max-width:800px;text-align:center;margin:0 auto;">
    <span class="hero-badge">🍪 Cookies</span>
    <h1>Cookiepolitik</h1>
    <p style="opacity:0.85;">Sidst opdateret: <?php echo date('d. F Y'); ?></p>
    <?php planteskolen_breadcrumbs(); ?>
  </div>
</div>

<section class="section section-alt">
  <div style="max-width:1000px;margin:0 auto;display:grid;grid-template-columns:260px 1fr;gap:50px;align-items:start;">

    <!-- Indholdsfortegnelse -->
    <div class="glass-card reveal" style="position:sticky;top:110px;">
      <h3 style="color:var(--mos);margin-top:0;font-size:0.9rem;text-transform:uppercase;letter-spacing:1.5px;padding-bottom:12px;border-bottom:2px solid var(--baggrund);font-weight:800;">
        Indhold
      </h3>
      <ol style="padding-left:18px;margin:0;line-height:2.4;">
        <li><a href="#hvad-er-cookies"  style="color:var(--tekst-lys);font-size:0.9rem;">Hvad er cookies?</a></li>
        <li><a href="#hvilke-cookies"   style="color:var(--tekst-lys);font-size:0.9rem;">Hvilke cookies bruger vi?</a></li>
        <li><a href="#tredjepart"       style="color:var(--tekst-lys);font-size:0.9rem;">Tredjeparts cookies</a></li>
        <li><a href="#samtykke"         style="color:var(--tekst-lys);font-size:0.9rem;">Dit samtykke</a></li>
        <li><a href="#slet-cookies"     style="color:var(--tekst-lys);font-size:0.9rem;">Slet eller afvis cookies</a></li>
        <li><a href="#cookie-kontakt"   style="color:var(--tekst-lys);font-size:0.9rem;">Kontakt os</a></li>
      </ol>
    </div>

    <!-- Indhold -->
    <div>

      <!-- 01 -->
      <div class="glass-card reveal" id="hvad-er-cookies" style="margin-bottom:24px;scroll-margin-top:110px;">
        <div style="display:grid;grid-template-columns:50px 1fr;gap:20px;align-items:start;">
          <div style="font-size:1.8rem;font-weight:900;color:#e5e7eb;line-height:1;">01</div>
          <div>
            <h2 style="color:var(--mos);font-size:1.3rem;margin-top:0;margin-bottom:16px;font-weight:800;">Hvad er cookies?</h2>
            <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:16px;">
              Cookies er små tekstfiler som gemmes på din computer, tablet eller smartphone når du besøger en hjemmeside. Cookies hjælper hjemmesiden med at huske dine indstillinger og præferencer, så du får en bedre brugeroplevelse næste gang du besøger siden.
            </p>
            <p style="color:var(--tekst-lys);line-height:1.8;">
              Cookies indeholder ikke personlige oplysninger som dit navn eller din adresse, og de kan ikke sprede virus eller andre skadelige programmer.
            </p>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:20px;">
              <div style="background:var(--baggrund);border-radius:12px;padding:20px;text-align:center;">
                <div style="font-size:2rem;margin-bottom:10px;">🍪</div>
                <h4 style="color:var(--mos);margin:0 0 8px;font-size:0.95rem;font-weight:800;">Session cookies</h4>
                <p style="color:var(--tekst-lys);font-size:0.85rem;margin:0;line-height:1.6;">Slettes automatisk når du lukker din browser.</p>
              </div>
              <div style="background:var(--baggrund);border-radius:12px;padding:20px;text-align:center;">
                <div style="font-size:2rem;margin-bottom:10px;">📅</div>
                <h4 style="color:var(--mos);margin:0 0 8px;font-size:0.95rem;font-weight:800;">Permanente cookies</h4>
                <p style="color:var(--tekst-lys);font-size:0.85rem;margin:0;line-height:1.6;">Gemmes på din enhed i en bestemt periode.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 02 -->
      <div class="glass-card reveal" id="hvilke-cookies" style="margin-bottom:24px;scroll-margin-top:110px;">
        <div style="display:grid;grid-template-columns:50px 1fr;gap:20px;align-items:start;">
          <div style="font-size:1.8rem;font-weight:900;color:#e5e7eb;line-height:1;">02</div>
          <div>
            <h2 style="color:var(--mos);font-size:1.3rem;margin-top:0;margin-bottom:16px;font-weight:800;">Hvilke cookies bruger vi?</h2>
            <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:20px;">Vi anvender følgende kategorier af cookies på vores hjemmeside:</p>

            <!-- Nødvendige -->
            <div style="background:var(--baggrund);border-radius:14px;padding:24px;margin-bottom:16px;">
              <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px;">
                <span style="background:#10b981;color:#fff;padding:4px 12px;border-radius:50px;font-size:0.78rem;font-weight:700;">Altid aktive</span>
                <h3 style="color:var(--mos);margin:0;font-size:1.05rem;font-weight:800;">🔒 Nødvendige cookies</h3>
              </div>
              <p style="color:var(--tekst-lys);font-size:0.92rem;line-height:1.7;margin-bottom:16px;">Disse cookies er nødvendige for at hjemmesiden fungerer korrekt og kan ikke deaktiveres.</p>
              <div style="border-radius:10px;overflow:hidden;border:1px solid #e8e4dc;">
                <div style="display:grid;grid-template-columns:1.5fr 2fr 1fr 1fr;background:var(--mos);color:#fff;padding:12px 16px;font-size:0.82rem;font-weight:700;gap:10px;">
                  <span>Navn</span><span>Formål</span><span>Type</span><span>Udløb</span>
                </div>
                <?php
                $noedvendige = [
                  ['planteskolen_cookies_accepted','Gemmer dit cookie-samtykke','Præference','1 år'],
                  ['wordpress_sec','WordPress sikkerhedstoken','Session','Session'],
                  ['PHPSESSID','PHP sessionsidentifikator','Session','Session'],
                ];
                foreach ($noedvendige as $i => $c) :
                  $bg = $i % 2 === 0 ? 'background:#fafaf7;' : 'background:#fff;';
                ?>
                  <div style="display:grid;grid-template-columns:1.5fr 2fr 1fr 1fr;padding:12px 16px;font-size:0.85rem;gap:10px;<?php echo $bg; ?>border-top:1px solid #f0f0f0;">
                    <span style="font-weight:600;color:var(--mos);font-family:monospace;font-size:0.8rem;"><?php echo $c[0]; ?></span>
                    <span style="color:var(--tekst-lys);"><?php echo $c[1]; ?></span>
                    <span style="color:var(--tekst-lys);"><?php echo $c[2]; ?></span>
                    <span style="color:var(--tekst-lys);"><?php echo $c[3]; ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Statistik -->
            <div style="background:var(--baggrund);border-radius:14px;padding:24px;margin-bottom:16px;">
              <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px;">
                <span style="background:var(--guld);color:#fff;padding:4px 12px;border-radius:50px;font-size:0.78rem;font-weight:700;">Kræver samtykke</span>
                <h3 style="color:var(--mos);margin:0;font-size:1.05rem;font-weight:800;">📊 Statistikcookies</h3>
              </div>
              <p style="color:var(--tekst-lys);font-size:0.92rem;line-height:1.7;margin-bottom:16px;">Hjælper os med at forstå, hvordan besøgende anvender hjemmesiden – alle data er anonymiserede.</p>
              <div style="border-radius:10px;overflow:hidden;border:1px solid #e8e4dc;">
                <div style="display:grid;grid-template-columns:1.5fr 2fr 1fr 1fr;background:var(--mos);color:#fff;padding:12px 16px;font-size:0.82rem;font-weight:700;gap:10px;">
                  <span>Navn</span><span>Formål</span><span>Type</span><span>Udløb</span>
                </div>
                <?php
                $statistik = [
                  ['_ga',   'Google Analytics – skelner mellem brugere','Statistik','2 år'],
                  ['_ga_*', 'Google Analytics – sessionstilstand',       'Statistik','2 år'],
                  ['_gid',  'Google Analytics – identificerer bruger',   'Statistik','24 timer'],
                  ['_gat',  'Google Analytics – begrænser forespørgsler','Statistik','1 minut'],
                ];
                foreach ($statistik as $i => $c) :
                  $bg = $i % 2 === 0 ? 'background:#fafaf7;' : 'background:#fff;';
                ?>
                  <div style="display:grid;grid-template-columns:1.5fr 2fr 1fr 1fr;padding:12px 16px;font-size:0.85rem;gap:10px;<?php echo $bg; ?>border-top:1px solid #f0f0f0;">
                    <span style="font-weight:600;color:var(--mos);font-family:monospace;font-size:0.8rem;"><?php echo $c[0]; ?></span>
                    <span style="color:var(--tekst-lys);"><?php echo $c[1]; ?></span>
                    <span style="color:var(--tekst-lys);"><?php echo $c[2]; ?></span>
                    <span style="color:var(--tekst-lys);"><?php echo $c[3]; ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
              <div style="background:#f0fdf4;border-left:4px solid var(--mos-lys);padding:14px 18px;border-radius:0 10px 10px 0;margin-top:14px;color:var(--mos);font-size:0.9rem;">
                Google Analytics er konfigureret med IP-anonymisering. Vi deler ikke data med Google til annoncering.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 03 -->
      <div class="glass-card reveal" id="tredjepart" style="margin-bottom:24px;scroll-margin-top:110px;">
        <div style="display:grid;grid-template-columns:50px 1fr;gap:20px;align-items:start;">
          <div style="font-size:1.8rem;font-weight:900;color:#e5e7eb;line-height:1;">03</div>
          <div>
            <h2 style="color:var(--mos);font-size:1.3rem;margin-top:0;margin-bottom:16px;font-weight:800;">Tredjeparts cookies</h2>
            <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:20px;">Vores hjemmeside anvender tjenester fra følgende tredjeparter, som kan sætte cookies:</p>
            <div style="display:flex;flex-direction:column;gap:14px;">
              <?php
              $tredjepart = [
                ['🔍','Google Analytics','Anonym besøgsstatistik til forbedring af vores hjemmeside.','https://policies.google.com/privacy','Se Googles privatlivspolitik'],
                ['🗺️','Google Maps','Interaktivt kort på vores kontaktside.','https://policies.google.com/privacy','Se Googles privatlivspolitik'],
                ['📸','Instagram / Meta','Deling af havebilleder og planteindhold.','https://www.facebook.com/privacy/policy/','Se Metas privatlivspolitik'],
              ];
              foreach ($tredjepart as $t) :
              ?>
                <div style="background:var(--baggrund);border-radius:12px;padding:22px;display:flex;gap:16px;align-items:flex-start;">
                  <div style="font-size:1.8rem;min-width:36px;"><?php echo $t[0]; ?></div>
                  <div>
                    <h4 style="color:var(--mos);margin:0 0 6px;font-weight:800;"><?php echo $t[1]; ?></h4>
                    <p style="color:var(--tekst-lys);margin:0 0 8px;font-size:0.9rem;line-height:1.6;"><?php echo $t[2]; ?></p>
                    <a href="<?php echo $t[3]; ?>" target="_blank" rel="noopener" style="color:var(--guld);font-size:0.85rem;font-weight:600;">
                      → <?php echo $t[4]; ?>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- 04 -->
      <div class="glass-card reveal" id="samtykke" style="margin-bottom:24px;scroll-margin-top:110px;">
        <div style="display:grid;grid-template-columns:50px 1fr;gap:20px;align-items:start;">
          <div style="font-size:1.8rem;font-weight:900;color:#e5e7eb;line-height:1;">04</div>
          <div>
            <h2 style="color:var(--mos);font-size:1.3rem;margin-top:0;margin-bottom:16px;font-weight:800;">Dit samtykke</h2>
            <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:16px;">
              Når du første gang besøger vores hjemmeside, vises en cookiebanner, hvor du kan vælge hvilke cookies du ønsker at acceptere. Dine valg gemmes i 1 år.
            </p>
            <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:20px;">
              Du kan til enhver tid ændre eller tilbagekalde dit samtykke ved at klikke på knappen herunder:
            </p>
            <button onclick="document.cookie='planteskolen_cookies_accepted=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;'; window.location.reload();"
                    style="background:linear-gradient(135deg,var(--mos),var(--mos-lys));color:#fff;border:none;padding:14px 28px;border-radius:50px;font-weight:700;font-size:0.95rem;cursor:pointer;font-family:inherit;box-shadow:0 4px 14px rgba(27,67,50,0.3);">
              🍪 Nulstil mit cookie-samtykke
            </button>
            <p style="color:var(--tekst-lys);font-size:0.85rem;margin-top:12px;">
              Siden genindlæses og cookiebannereret vises igen, så du kan opdatere dine valg.
            </p>
          </div>
        </div>
      </div>

      <!-- 05 -->
      <div class="glass-card reveal" id="slet-cookies" style="margin-bottom:24px;scroll-margin-top:110px;">
        <div style="display:grid;grid-template-columns:50px 1fr;gap:20px;align-items:start;">
          <div style="font-size:1.8rem;font-weight:900;color:#e5e7eb;line-height:1;">05</div>
          <div>
            <h2 style="color:var(--mos);font-size:1.3rem;margin-top:0;margin-bottom:16px;font-weight:800;">Slet eller afvis cookies i din browser</h2>
            <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:20px;">Du kan altid slette eller blokere cookies direkte i din browser:</p>
            <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:14px;">
              <?php
              $browsere = [
                ['🌐','Google Chrome','Indstillinger → Privatliv og sikkerhed → Cookies og andre webstedsdata','https://support.google.com/chrome/answer/95647'],
                ['🦊','Mozilla Firefox','Indstillinger → Privatliv & sikkerhed → Cookies og webstedsdata','https://support.mozilla.org/da/kb/forbedret-beskyttelse-mod-sporing-firefox-pc'],
                ['🧭','Safari','Indstillinger → Privatliv → Administrer webstedsdata','https://support.apple.com/da-dk/guide/safari/sfri11471/mac'],
                ['🔷','Microsoft Edge','Indstillinger → Cookies og webstedstilladelser','https://support.microsoft.com/da-dk/microsoft-edge/slet-cookies-i-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09'],
              ];
              foreach ($browsere as $b) :
              ?>
                <div style="background:var(--baggrund);border-radius:12px;padding:20px;">
                  <div style="font-size:1.6rem;margin-bottom:10px;"><?php echo $b[0]; ?></div>
                  <h4 style="color:var(--mos);margin:0 0 8px;font-weight:800;font-size:0.95rem;"><?php echo $b[1]; ?></h4>
                  <p style="color:var(--tekst-lys);font-size:0.85rem;line-height:1.6;margin-bottom:10px;"><?php echo $b[2]; ?></p>
                  <a href="<?php echo $b[3]; ?>" target="_blank" rel="noopener" style="color:var(--guld);font-size:0.85rem;font-weight:600;">Læs vejledning →</a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- 06 -->
      <div class="glass-card reveal" id="cookie-kontakt" style="margin-bottom:24px;scroll-margin-top:110px;">
        <div style="display:grid;grid-template-columns:50px 1fr;gap:20px;align-items:start;">
          <div style="font-size:1.8rem;font-weight:900;color:#e5e7eb;line-height:1;">06</div>
          <div>
            <h2 style="color:var(--mos);font-size:1.3rem;margin-top:0;margin-bottom:16px;font-weight:800;">Kontakt os</h2>
            <p style="color:var(--tekst-lys);line-height:1.8;margin-bottom:20px;">Har du spørgsmål til vores brug af cookies? Kontakt os gerne:</p>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
              <div style="background:var(--baggrund);border-radius:12px;padding:24px;">
                <h4 style="color:var(--mos);margin-top:0;font-weight:800;">📬 Planteskolen</h4>
                <ul style="padding:0;line-height:2.4;color:var(--tekst-lys);">
                  <li>📧 <a href="mailto:info@planteskolen.dk" style="color:var(--mos);font-weight:600;">info@planteskolen.dk</a></li>
                  <li>📞 <a href="tel:+4500000000" style="color:var(--mos);font-weight:600;">+45 00 00 00 00</a></li>
                  <li>📍 Skovvej 1, 0000 By</li>
                </ul>
              </div>
              <div style="background:var(--baggrund);border-radius:12px;padding:24px;">
                <h4 style="color:var(--mos);margin-top:0;font-weight:800;">🔗 Relevante links</h4>
                <ul style="padding:0;line-height:2.4;color:var(--tekst-lys);">
                  <li><a href="/privatlivspolitik" style="color:var(--mos);">→ Privatlivspolitik</a></li>
                  <li><a href="https://www.datatilsynet.dk" target="_blank" rel="noopener" style="color:var(--mos);">→ Datatilsynet</a></li>
                  <li><a href="https://www.cookieinfo.dk" target="_blank" rel="noopener" style="color:var(--mos);">→ Cookieinfo.dk</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
@media (max-width: 900px) {
  .section-alt > div { grid-template-columns: 1fr !important; }
  .glass-card[style*="sticky"] { position: static !important; }
}
@media (max-width: 600px) {
  #hvilke-cookies .glass-card > div,
  #slet-cookies > div > div > div[style*="grid-template-columns:repeat(2"] {
    grid-template-columns: 1fr !important;
  }
}
</style>

<?php get_footer(); ?>
