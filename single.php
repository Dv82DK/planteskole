<?php get_header(); ?>

<?php planteskolen_breadcrumbs(); ?>

<main style="padding:80px 40px;max-width:820px;margin:0 auto;">
  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php if ( has_post_thumbnail() ) : ?>
        <div style="border-radius:var(--radius);overflow:hidden;margin-bottom:40px;box-shadow:var(--skygge);">
          <?php the_post_thumbnail('large', ['style'=>'width:100%;height:auto;']); ?>
        </div>
      <?php endif; ?>

      <header style="margin-bottom:30px;">
        <div style="font-size:0.85rem;color:var(--tekst-lys);margin-bottom:12px;display:flex;align-items:center;gap:12px;">
          <span>📅 <?php echo get_the_date('j. F Y'); ?></span>
          <?php
          $cats = get_the_category();
          if ($cats) echo '<span>· <a href="' . esc_url(get_category_link($cats[0]->term_id)) . '" style="color:var(--mos-lys);font-weight:600;">' . esc_html($cats[0]->name) . '</a></span>';
          ?>
        </div>
        <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:clamp(1.8rem,3.5vw,2.8rem);color:var(--mos);margin:0;"><?php the_title(); ?></h1>
      </header>

      <div style="font-size:1.05rem;line-height:1.85;color:var(--tekst);">
        <?php the_content(); ?>
      </div>

      <footer style="margin-top:50px;padding-top:30px;border-top:1px solid rgba(27,67,50,0.1);">
        <?php the_tags('<div style="display:flex;gap:8px;flex-wrap:wrap;">', '', '</div>'); ?>
        <div style="margin-top:24px;">
          <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>"
             style="color:var(--mos-lys);font-weight:700;font-size:0.95rem;">← Tilbage til havebloggen</a>
        </div>
      </footer>

    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
