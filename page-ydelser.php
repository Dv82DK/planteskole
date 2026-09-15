<?php
/* Template Name: Ydelser */
get_header();
?>

<div class="hero" style="min-height:50vh;padding-top:140px;">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="hero-inner" style="max-width:800px;text-align:center;margin:0 auto;">
    <span class="hero-badge">🌿 Hvad vi tilbyder</span>
    <h1>Vores ydelser</h1>
    <p style="max-width:600px;margin:0 auto 20px;">Komplette plante- og anlægsydelser til private og erhverv</p>
    <?php planteskolen_breadcrumbs(); ?>
  </div>
</div>

<section class="section section-alt">
  <div class="services-grid" style="max-width:1100px;margin:0 auto;">
    <?php
    $ydelser = [
      ['🌳','Træer & Buske','Stort udvalg af hjemmehørende og udvalgte træer og buske – klar til plantning i alle størrelser.','Stilk-eg og bøg|Frugttræer og bærbuske|Prydtræer og solitærtræer|Klimarobuste sorter'],
      ['🌿','Hækplanter','Levende hegn i alle størrelser. Vi rådgiver om den rette sort til din jord, lys og ønskede tæthed.','Avnbøg og bøgehæk|Liguster og ildtorn|Thuja og stedsegrønne|Blomstrende hæk'],
      ['🌸','Stauder & Blomster','Farverige og flerårige planter til alle hjørner af haven – fra sol til dyb skygge.','Sommerblomster og stauder|Roser og klatreplanter|Løgblomster|Bivenlige planter'],
      ['🪴','Potteplanter & Krukker','Et bredt udvalg til terrasse, altan og indendørs brug – sæsonvarer og stedsegrønne.','Indendørs grønne planter|Terrasseplanter|Sæsonkrukker|Jord og potter'],
      ['🏡','Plantning & Anlæg','Vi planter for dig – fra enkelt plante til fuldt haveanlæg. Altid med 2-årig overlevelsesgaranti.','Besigtigelse og tilbud|Professionel plantning|Haveanlæg fra bunden|Efterbehandling inkl.'],
      ['🌱','Rådgivning','Gratis planterådgivning i planteskolen eller på stedet. Vi matcher planter til din jord og dine ønsker.','Personlig planterådgivning|Jordbundsanalyse|Haveplanlægning|Sæsonvejledning'],
    ];
    foreach ( $ydelser as $y ) :
    ?>
    <div class="service-card reveal">
      <div class="service-icon"><?php echo $y[0]; ?></div>
      <h3><?php echo $y[1]; ?></h3>
      <p><?php echo $y[2]; ?></p>
      <ul>
        <?php foreach ( explode('|', $y[3]) as $punkt ) echo '<li>✓ ' . $punkt . '</li>'; ?>
      </ul>
      <a href="#kontakt" class="service-link">Få et tilbud →</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="cta-section reveal">
  <div class="cta-inner">
    <h2>Brug for hjælp til at vælge?</h2>
    <p>Vi rådgiver gratis – kom forbi eller ring, så finder vi den rette løsning til din have.</p>
    <a href="#kontakt" class="btn-primary">🌿 Kontakt os i dag</a>
  </div>
</section>

<?php get_footer(); ?>
