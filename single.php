<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <div class="row">

        <?php while (have_posts()) : the_post(); ?>

            <div class="col-5">
                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

    </div>
<?php endif; ?>

<?php get_footer(); ?>