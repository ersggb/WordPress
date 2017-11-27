<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'mspd_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mspd_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'mspd' ),
        'section'  => 'title_tagline',
        'settings' => 'mspd_logo',
    ) ) );
}
add_action( 'customize_register', 'customize_register' );
