<?php get_header(); ?>

<?php planteskolen_breadcrumbs(); ?>

<main style="padding:80px 40px;max-width:1100px;margin:0 auto;">

  <div class="section-header" style="margin-bottom:50px;">
    <?php if ( is_category() ) : ?>
      <span class="section-badge">Kategori</span>
      <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:2.4rem;color:var(--mos);"><?php single_cat_title(); ?></h1>
    <?php elseif ( is_search() ) : ?>
      <span class="section-badge">Søgeresultater</span>
      <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:2.4rem;color:var(--mos);">Resultater for: "<?php echo esc_html( get_search_query() ); ?>"</h1>
    <?php elseif ( is_archive() ) : ?>
      <span class="section-badge">Arkiv</span>
      <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:2.4rem;color:var(--mos);"><?php the_archive_title(); ?></h1>
    <?php else : ?>
      <span class="section-badge">Haveblog</span>
      <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:2.4rem;color:var(--mos);">Seneste fra haven</h1>
    <?php endif; ?>
  </div>

  <?php if ( have_posts() ) : ?>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:32px;">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background:var(--hvid);border-radius:var(--radius);overflow:hidden;box-shadow:var(--skygge);transition:var(--transition);display:flex;flex-direction:column;">

          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" style="overflow:hidden;display:block;height:220px;">
              <?php the_post_thumbnail('medium_large', ['style'=>'width:100%;height:100%;object-fit:cover;transition:transform 0.4s;']); ?>
            </a>
          <?php else : ?>
            <div style="height:160px;background:linear-gradient(135deg,var(--mos),var(--mos-lys));display:flex;align-items:center;justify-content:center;font-size:4rem;">🌿</div>
          <?php endif; ?>

          <div style="padding:24px;flex:1;display:flex;flex-direction:column;">
            <div style="font-size:0.82rem;color:var(--tekst-lys);margin-bottom:8px;"><?php echo get_the_date('j. F Y'); ?></div>
            <h2 style="font-family:'Playfair Display',Georgia,serif;font-size:1.15rem;color:var(--mos);margin:0 0 10px;">
              <a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a>
            </h2>
            <p style="font-size:0.9rem;color:var(--tekst-lys);line-height:1.65;margin:0 0 auto;flex:1;">
              <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
            </p>
            <a href="<?php the_permalink(); ?>" style="display:inline-flex;align-items:center;gap:6px;margin-top:18px;color:var(--mos-lys);font-weight:700;font-size:0.9rem;">
              Læs mere →
            </a>
          </div>
        </article>
      <?php endwhile; ?>
    </div>

    <div style="margin-top:60px;display:flex;justify-content:center;">
      <?php the_posts_pagination(['prev_text' => '← Forrige', 'next_text' => 'Næste →']); ?>
    </div>

  <?php else : ?>
    <div style="text-align:center;padding:80px 24px;">
      <div style="font-size:4rem;margin-bottom:20px;">🌱</div>
      <p style="color:var(--tekst-lys);font-size:1.1rem;">Ingen indlæg fundet.</p>
      <a href="/" style="color:var(--mos-lys);font-weight:700;">← Tilbage til forsiden</a>
    </div>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
