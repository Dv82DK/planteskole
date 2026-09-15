<?php get_header(); ?>

<?php planteskolen_breadcrumbs(); ?>

<main style="padding:80px 40px;max-width:900px;margin:0 auto;">
  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header style="margin-bottom:40px;">
        <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:clamp(1.8rem,3.5vw,2.8rem);color:var(--mos);margin:0;"><?php the_title(); ?></h1>
      </header>
      <div style="font-size:1.05rem;line-height:1.85;color:var(--tekst);">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
