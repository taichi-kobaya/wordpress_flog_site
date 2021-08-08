<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body>
    <div id="wrapper">
        <?php if (have_posts()) : ?>
            <?php get_template_part('includes/header'); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-heading">
                    <h1><?php the_title(); ?></h1>
                </div>

                <div class="single-content">
                    <?php global $post;
                    echo $post->post_content;
                    ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php get_template_part('includes/footer'); ?>

        <?php get_footer(); ?>
</body>

</html>