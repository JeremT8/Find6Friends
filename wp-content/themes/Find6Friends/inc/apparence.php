<?php 
add_action('customize_register', function (WP_Customize_Manager $manager) {

    $manager->add_section('F6F_appearance', [
        'title' => __('Theme appearance')
    ]);

    $manager->add_setting('logo',[
        'sanitize_callback' => 'esc_url_raw'
    ]);

    $manager->add_control(new WP_Customize_Image_Control($manager, 'logo', [
        'label' => __('logo', 'find6friends'),
        'section' => 'F6F_appearance'
    ]));
});

function my_favicon(){
    ?>

<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>../assets/images/F.jpg">
<?php

  }

  add_action('wp_head', 'my_favicon');