<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>

</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="row justify-content-between">
                <img class="col-3 logo" src="<?php echo get_field('header_logo')['url']; ?>">
                <h5 class="col-6 header_text"><?php echo get_field('header_text'); ?></h5>
                <?php
                if (have_rows('header_button')) :
                    while (have_rows('header_button')) : the_row();
                        $button_link = get_sub_field('link');
                        $button_text = get_sub_field('button_text');
                ?>
                        <input class="header_button col-3" type="button" src="<?php echo $button_link; ?>" value="<?php echo $button_text; ?>"></input>

                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </header>