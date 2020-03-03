<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="col-8 content">

            <h1><?php the_title(); ?></h1>

            <div class="thumbnail">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>

            <?php if (get_field('email')) : ?>
                <p>contact: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
            <?php endif; ?>

            <?php if (get_field('github_profile')) : ?>
                <p>contact: <a href="<?php the_field('github_profile'); ?>"><?php the_field('github_profile'); ?></a></p>
            <?php endif; ?>

            <?php the_content(); ?>


            <div class="d-flex justify-content-between">
                <div>
                    <?php echo previous_post_link(); ?>
                </div>
                <div>
                    <?php echo next_post_link(); ?>
                </div>
            </div>
        </div>


    <?php endwhile; ?>


<?php endif; ?>

<?php get_footer(); ?>