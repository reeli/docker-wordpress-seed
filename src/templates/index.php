<?php get_template_part('partials/header'); ?>
    <section id="content" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/entry'); ?>
            <?php comments_template(); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part('partials/nav', 'below'); ?>
    </section>
<?php get_template_part('partials/sidebar'); ?>
<?php get_template_part('partials/footer'); ?>