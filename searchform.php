<form role="search" method="get" class="soegeskema" action="<?php echo esc_url( home_url('/') ); ?>">
  <label>
    <span class="sr-only"><?php _e( 'Søg efter:', 'planteskolen-tema' ); ?></span>
    <input type="search"
           placeholder="<?php esc_attr_e( 'Søg i planter og blog...', 'planteskolen-tema' ); ?>"
           value="<?php echo get_search_query(); ?>"
           name="s"
           style="padding:12px 18px;border:2px solid rgba(27,67,50,0.12);border-radius:50px;font-size:0.95rem;width:100%;font-family:inherit;outline:none;transition:var(--transition);">
  </label>
  <button type="submit"
          style="background:var(--mos);color:var(--hvid);border:none;padding:12px 24px;border-radius:50px;font-weight:700;cursor:pointer;font-family:inherit;margin-top:8px;transition:var(--transition);">
    🔍 Søg
  </button>
</form>
