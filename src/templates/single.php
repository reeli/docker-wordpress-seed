<?php get_template_part('partials/header'); ?>
    <section id="content" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/entry'); ?>
            <?php if (!post_password_required()) comments_template('partials/comments.php', true); ?>
        <?php endwhile; endif; ?>
        <footer class="footer">
            <?php get_template_part('partials/nav', 'below-single'); ?>
        </footer>
    </section>
<?php get_template_part('partials/sidebar'); ?>
<?php get_template_part('partials/footer'); ?>