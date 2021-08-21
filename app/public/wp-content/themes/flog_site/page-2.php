<?php
/*
Template Name: ずかん
*/
?>

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

                <?php
                $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                $args = array(
                    'posts_per_page' => 10, // 表示件数
                    'pag' => $paged,
                    'orderby' => 'post_date', // 並び順を日付順
                    'order' => 'DESC', // 並び順を降順
                    'post_type' => 'post', // 投稿の一覧を表示
                    'post_status' => 'publish' // 公開済みのものを表示
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <ul>
                            <li class="yokonarabi">
                                <div class="zenkiji_img">
                                    <div class="thumbnail">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <?php echo get_the_post_thumbnail(); ?>
                                    </div>
                                    <?php the_title(); ?>
                                    <h3 class="post-subtitle">
                                        <?php the_excerpt(); ?>
                                    </h3>
                                    <p><?php echo get_the_date(); ?></p>
                                </div>
                                </a>
                            </li>
                        </ul>
                <?php endwhile;
                endif; ?>
                <?php wp_reset_postdata(); ?>

                <div class="pagenate">
                    <?php
                    if ($the_query->max_num_pages > 1) {
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'total' => $the_query->max_num_pages
                        ));
                    }
                    ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php get_template_part('includes/footer'); ?>

        <?php get_footer(); ?>
</body>

</html>