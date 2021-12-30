<?php
$allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
?>

<?php if ($allPostsWPQuery->have_posts()) : ?>

    <div class="posts-container">
        <?php while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>
            <p><?php the_title() ?></p>
            <div class="post-content">


                <?php the_content() ?>
            </div>

        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>