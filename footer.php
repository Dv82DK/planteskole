<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <h3><?php bloginfo('name'); ?></h3>
      <p>Fra frø til fuldt udvokset – vi hjælper dig med at skabe smukke haver og grønne rum. Specialister i hjemmehørende planter og bæredygtige løsninger.</p>
      <div class="footer-social">
        <?php
        $socials = array(
  'facebook'  => array( get_theme_mod('planteskolen_facebook',''),  '<img src="' . get_template_directory_uri() . '/images/facebook.png" alt="Facebook" width="20" height="20">' ),
  'instagram' => array( get_theme_mod('planteskolen_instagram',''), '<img src="' . get_template_directory_uri() . '/images/instagram.png" alt="Instagram" width="20" height="20">' ),
  'linkedin'  => array( get_theme_mod('planteskolen_linkedin',''),  '<img src="' . get_template_directory_uri() . '/images/linkedin.png" alt="LinkedIn" width="20" height="20">' ),
);
        foreach ( $socials as $key => $data ) :
          if ( $data[0] ) :
        ?>
          <a href="<?php echo esc_url($data[0]); ?>" target="_blank" rel="noopener" aria-label="<?php echo ucfirst($key); ?>">
            <?php echo $data[1]; ?>
          </a>
        <?php
          endif;
        endforeach;
        ?>
      </div>
    </div>

    <div class="footer-col">
      <h3>Kontakt</h3>
      <ul>
        <li>📞 <a href="tel:+4500000000">+45 00 00 00 00</a></li>
        <li>✉️ <a href="mailto:info@planteskolen.dk">info@planteskolen.dk</a></li>
        <li>📍 Skovvej 1<br>0000 By</li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Åbningstider</h3>
      <ul>
        <li>Man–Fre: 09:00 – 17:00</li>
        <li>Lørdag: 10:00 – 15:00</li>
        <li>Søndag: Lukket</li>
        <li style="color:var(--lime); margin-top:10px;">
          <strong>🌱 Se alle vores planter</strong>
        </li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Genveje</h3>
      <?php
      if ( has_nav_menu('footer') ) {
          wp_nav_menu( array(
              'theme_location' => 'footer',
              'container'      => false,
              'menu_class'     => 'footer-menu',
          ) );
      } else {
          echo '<ul>
            <li><a href="' . esc_url(home_url('/')) . '">Forside</a></li>
            <li><a href="/planter">Planter & træer</a></li>
            <li><a href="/plantning">Plantning & anlæg</a></li>
            <li><a href="/om-os">Om planteskolen</a></li>
            <li><a href="/blog">Haveblog</a></li>
            <li><a href="/kontakt">Kontakt</a></li>
          </ul>';
      }
      ?>
    </div>
  </div>

  <div class="footer-bottom">
    <span>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — CVR: 00 000 000</span>
    <span>
      <a href="/privatlivspolitik" style="color:inherit;">Privatlivspolitik</a>
      &nbsp;·&nbsp;
      <a href="/cookiepolitik" style="color:inherit;">Cookiepolitik</a>
    </span>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
