<?php /* Template Name: home */ ?>
<?php get_header(); ?>




<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>

<div>
    <?php echo the_field('media'); ?>


    <?php $video_mp4 = get_field('video');
    $attr = array(
        'mp4' => $video_mp4,
    );
    echo wp_video_shortcode($attr);

    ?>

</div>
<?php echo 'aaaaa'; ?>
<div class=info_container>
    <?php
    if (have_rows('info_container')) :
        while (have_rows('info_container')) : the_row();
            while (have_rows('media')) : the_row();
                $image = get_sub_field('event_image'); ?>
    <img src="<?php echo $image; ?>" />

    <?php endwhile;
        endwhile;
    endif;
    ?>
</div>
<!--  render posts  -->

<div class=''>
    <?php get_template_part('posts') ?>
</div>


<div>

    <?php if (have_rows('blog_container')) : ?>
    <?php while (have_rows('blog_container')) : the_row(); ?>

    <h1><?php echo the_sub_field('title'); ?></h1>
    <div>

        <img src=" <?php echo the_sub_field('image'); ?>">
        <p> <?php echo the_sub_field('content'); ?></p>
    </div>

    <?php endwhile; ?>





    <?php endif; ?>

</div>


<!-- <?php
        $value = get_field('event_video');
        if ($value) {

            echo $value;
        } else {

            $image = get_field('event_image');

            if (!empty($image)) : ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo    $image['alt']; ?>" /> 
                    <?php endif;
            }
                    ?> -->



<footer>

    <h4>Wszelkie prawa zastrzeżone © 2021 - Nazwa domeny</h4>
    <button>Polityka prywatności </button>
    <button>Regulamin</button>
</footer>
<?php wp_footer() ?>
</body>

</html>