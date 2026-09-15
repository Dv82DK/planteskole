<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function planteskolen_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-logo' );

    register_nav_menus( array(
        'primary' => __( 'Hovedmenu', 'planteskolen-tema' ),
        'footer'  => __( 'Footer menu', 'planteskolen-tema' ),
    ) );

    // Google Fonts
    add_action( 'wp_head', 'planteskolen_google_fonts', 1 );
}
add_action( 'after_setup_theme', 'planteskolen_setup' );

function planteskolen_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Lato:wght@400;600;700&display=swap" rel="stylesheet">';
}

function planteskolen_scripts() {
    wp_enqueue_style( 'planteskolen-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_style( 'planteskolen-animations', get_template_directory_uri() . '/assets/css/animations.css', array(), '1.0' );
    wp_enqueue_script( 'planteskolen-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
    wp_enqueue_script( 'planteskolen-cookies', get_template_directory_uri() . '/assets/js/cookies.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'planteskolen_scripts' );

function planteskolen_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer widget',
        'id'            => 'footer-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'planteskolen_widgets_init' );

/* ==========================================================
   CUSTOMIZER
   ========================================================== */
function planteskolen_customize_register( $wp_customize ) {

    /* ---------- HERO / VIDEO ---------- */
    $wp_customize->add_section( 'planteskolen_hero_section', array(
        'title'    => __( 'Header / Hero', 'planteskolen-tema' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'planteskolen_hero_video', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize,
        'planteskolen_hero_video',
        array(
            'label'       => __( 'Upload video til header (MP4)', 'planteskolen-tema' ),
            'description' => __( 'Anbefalet: naturvideo, MP4, uden lyd, under 15MB, 1920x1080px.', 'planteskolen-tema' ),
            'section'     => 'planteskolen_hero_section',
            'mime_type'   => 'video',
        )
    ) );

    $wp_customize->add_setting( 'planteskolen_hero_poster', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'planteskolen_hero_poster',
        array(
            'label'   => __( 'Poster/baggrundsbillede (vises på mobil og mens video indlæses)', 'planteskolen-tema' ),
            'section' => 'planteskolen_hero_section',
        )
    ) );

    $wp_customize->add_setting( 'planteskolen_hero_overlay', array(
        'default'           => '65',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( 'planteskolen_hero_overlay', array(
        'label'       => __( 'Overlay mørkhed (0–90%)', 'planteskolen-tema' ),
        'section'     => 'planteskolen_hero_section',
        'type'        => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 90 ),
    ) );

    $wp_customize->add_setting( 'planteskolen_hero_video_mobile', array(
        'default'           => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ) );
    $wp_customize->add_control( 'planteskolen_hero_video_mobile', array(
        'label'   => __( 'Afspil video på mobil (ellers vises poster-billede)', 'planteskolen-tema' ),
        'section' => 'planteskolen_hero_section',
        'type'    => 'checkbox',
    ) );

    /* ---------- KONTAKT & MAPS ---------- */
    $wp_customize->add_section( 'planteskolen_contact_section', array(
        'title'    => __( 'Kontakt & Maps', 'planteskolen-tema' ),
        'priority' => 35,
    ) );

    $wp_customize->add_setting( 'planteskolen_google_maps_embed', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'planteskolen_google_maps_embed', array(
        'label'       => __( 'Google Maps embed URL', 'planteskolen-tema' ),
        'description' => __( 'Kun src-URL fra Google Maps → Del → Integrer.', 'planteskolen-tema' ),
        'section'     => 'planteskolen_contact_section',
        'type'        => 'url',
    ) );

    /* ---------- SOCIALE MEDIER ---------- */
    $wp_customize->add_section( 'planteskolen_social_section', array(
        'title'    => __( 'Sociale medier', 'planteskolen-tema' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'planteskolen_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'planteskolen_facebook', array(
        'label'   => __( 'Facebook URL', 'planteskolen-tema' ),
        'section' => 'planteskolen_social_section',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( 'planteskolen_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'planteskolen_instagram', array(
        'label'   => __( 'Instagram URL', 'planteskolen-tema' ),
        'section' => 'planteskolen_social_section',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( 'planteskolen_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'planteskolen_linkedin', array(
        'label'   => __( 'LinkedIn URL', 'planteskolen-tema' ),
        'section' => 'planteskolen_social_section',
        'type'    => 'url',
    ) );
}
add_action( 'customize_register', 'planteskolen_customize_register' );

/* ==========================================================
   KONTAKTFORMULAR
   ========================================================== */
function planteskolen_handle_contact_form() {
    if ( ! isset( $_POST['planteskolen_contact_nonce'] ) ||
         ! wp_verify_nonce( $_POST['planteskolen_contact_nonce'], 'planteskolen_contact' ) ) {
        wp_die( 'Sikkerhedsfejl.' );
    }

    $name    = sanitize_text_field( $_POST['name']    ?? '' );
    $phone   = sanitize_text_field( $_POST['phone']   ?? '' );
    $email   = sanitize_email(      $_POST['email']   ?? '' );
    $subject = sanitize_text_field( $_POST['emne']    ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    $to           = get_option( 'admin_email' );
    $subject_line = 'Ny henvendelse: ' . ( $subject ?: 'Generelt' );
    $body         = "Navn: $name\nTelefon: $phone\nE-mail: $email\nEmne: $subject\n\nBesked:\n$message";
    $headers      = array( 'Reply-To: ' . $email );

    wp_mail( $to, $subject_line, $body, $headers );

    wp_redirect( add_query_arg( 'sendt', '1', home_url('/') ) . '#kontakt' );
    exit;
}
add_action( 'admin_post_nopriv_planteskolen_contact_submit', 'planteskolen_handle_contact_form' );
add_action( 'admin_post_planteskolen_contact_submit', 'planteskolen_handle_contact_form' );

/* ==========================================================
   BREADCRUMBS
   ========================================================== */
function planteskolen_breadcrumbs() {
    if ( is_front_page() ) return;

    echo '<nav class="breadcrumbs">';
    echo '<a href="' . esc_url( home_url('/') ) . '">Forside</a>';

    if ( is_page() ) {
        echo ' <span>›</span> <span>' . get_the_title() . '</span>';
    } elseif ( is_single() ) {
        $cats = get_the_category();
        if ( ! empty( $cats ) ) {
            echo ' <span>›</span> ';
            echo '<a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">';
            echo esc_html( $cats[0]->name ) . '</a>';
        }
        echo ' <span>›</span> <span>' . get_the_title() . '</span>';
    } elseif ( is_category() ) {
        echo ' <span>›</span> <span>';
        single_cat_title();
        echo '</span>';
    } elseif ( is_search() ) {
        echo ' <span>›</span> <span>Søgeresultater</span>';
    } elseif ( is_404() ) {
        echo ' <span>›</span> <span>404 – ikke fundet</span>';
    } elseif ( is_archive() ) {
        echo ' <span>›</span> <span>Arkiv</span>';
    }

    echo '</nav>';
}
