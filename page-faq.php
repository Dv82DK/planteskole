<?php
/* Template Name: FAQ */
get_header();
?>

<div class="hero" style="min-height:40vh;padding-top:140px;">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="hero-inner" style="max-width:800px;text-align:center;margin:0 auto;">
    <span class="hero-badge">❓ Svar på dine spørgsmål</span>
    <h1>Ofte stillede spørgsmål</h1>
    <p style="max-width:600px;margin:0 auto 20px;">Svar på de mest almindelige spørgsmål om planter, plantning og vores sortiment</p>
    <?php planteskolen_breadcrumbs(); ?>
  </div>
</div>

<section class="section section-alt">
  <div style="max-width:800px;margin:0 auto;">
    <?php
    $faq = [
      'Planter & Sortiment' => [
        ['Hvornår er den bedste tid at plante træer og buske?',
         'Efteråret (september–november) er generelt den bedste tid at plante løvfældende træer og buske, da jorden stadig er varm og planterne kan nå at etablere rødder inden vinteren. Foråret (marts–maj) er også udmærket. Stedsegrønne planter plantes bedst i april-maj eller august-september.'],
        ['Kan I hjælpe mig med at vælge de rigtige planter til min have?',
         'Ja, vi tilbyder gratis personlig rådgivning i planteskolen alle åbningsdage. Vi tager hensyn til din jordtype, lysforhold, havens størrelse og dine ønsker til blomstring, farver og vedligeholdelse. Kom bare forbi – tag gerne billeder af haven med.'],
        ['Hvad betyder det, at en plante er "hjemmehørende"?',
         'Hjemmehørende planter er arter, der naturligt vokser i Danmark og har gjort det i lang tid. De er klimarobuste, kræver minimal pleje, er gode for insekter og fugle, og kræver sjældent ekstra vanding eller gødskning. Vi anbefaler dem stærkt til de fleste haver.'],
      ],
      'Plantning & Anlæg' => [
        ['Hvad er inkluderet i jeres 2-årige overlevelsesgaranti?',
         'Når vi planter for dig, garanterer vi, at planten overlever de første 2 år. Hvis en plante dør inden for garantiperioden under normale omstændigheder, erstatter vi den gratis. Garantien gælder ikke ved ekstreme vejrforhold, hærværk eller forkert vanding af kunden.'],
        ['Hvor hurtigt kan I komme ud og beplante?',
         'I travle sæsoner (forår og efterår) er ventetiden typisk 2–4 uger. Uden for spidsbelastning kan vi ofte komme ud inden for 5–10 hverdage. Vi starter altid med en gratis besigtigelse, så ring eller skriv for at booke.'],
        ['Leverer I planter til hjemmeadressen?',
         'Ja, vi leverer planter i hele regionen. Leveringsprisen afhænger af afstand og mængde. Ved køb af plantningspakke er levering inkluderet. Kontakt os for en konkret pris på levering til din adresse.'],
      ],
      'Pleje & Vedligeholdelse' => [
        ['Hvor meget skal jeg vande nyplantede træer og buske?',
         'Nyplantede planter skal vandes regelmæssigt de første 1–2 sæsoner, indtil de er fuldt etablerede. Som tommelfingerregel: 10–20 liter vand pr. plante 2–3 gange om ugen i tørre perioder. Undgå at vande overfladisk og hyppigt – det er bedre med dybe, sjældne vandinger.'],
        ['Hvornår og hvordan skal jeg beskære min hæk?',
         'De fleste hækplanter klippes 1–2 gange om året – typisk i juni og igen i august-september. Undgå at klippe under fuglenes ynglesæson (15. marts – 1. august). Bøgehæk klippes bedst i august. Vi giver gerne specifik vejledning for din hæktype – kom forbi eller ring.'],
      ],
      'Praktisk' => [
        ['Hvad er jeres åbningstider?',
         'Man–Fre: 09:00–17:00, Lørdag: 10:00–15:00, Søndag: Lukket. I travle sæsoner (forår og efterår) holder vi åbent til 18:00 på hverdage. Følg os på Facebook og Instagram for aktuelle ændringer.'],
        ['Kan jeg bestille planter til afhentning?',
         'Ja, du kan ringe eller skrive og reservere specifikke planter, så de er klar til afhentning på en aftalt dag. Det anbefaler vi særligt i sæsonen, da populære sorter hurtigt sælger ud.'],
      ],
    ];
    foreach ( $faq as $kat => $spg ) :
    ?>
    <div style="margin-bottom:50px;">
      <h2 style="color:var(--mos);font-size:1.3rem;margin-bottom:16px;font-family:'Playfair Display',Georgia,serif;"><?php echo $kat; ?></h2>
      <?php foreach ( $spg as $q ) : ?>
      <div class="glass-card reveal" style="margin-bottom:12px;padding:0;overflow:hidden;">
        <button class="faq-toggle" style="width:100%;text-align:left;background:none;border:none;padding:20px 24px;font-size:1rem;font-weight:600;color:var(--mos);cursor:pointer;display:flex;justify-content:space-between;align-items:center;font-family:inherit;">
          <?php echo $q[0]; ?>
          <span style="font-size:1.4rem;color:var(--guld);transition:transform 0.3s;flex-shrink:0;margin-left:16px;">+</span>
        </button>
        <div class="faq-answer" style="display:none;padding:0 24px 20px;color:var(--tekst-lys);line-height:1.7;">
          <p style="margin:0;"><?php echo $q[1]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>

    <div style="background:linear-gradient(135deg,var(--mos),var(--mos-lys));color:#fff;padding:50px;border-radius:var(--radius);text-align:center;margin-top:40px;">
      <h3 style="margin-top:0;font-size:1.5rem;font-family:'Playfair Display',Georgia,serif;">Mangler du et svar?</h3>
      <p style="opacity:0.9;margin-bottom:24px;">Kontakt os direkte – vi rådgiver gerne om alt inden for planter og haver.</p>
      <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
        <a href="/kontakt" class="btn-primary">Send en besked</a>
        <a href="tel:+4500000000" class="btn-outline">📞 Ring til os</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
