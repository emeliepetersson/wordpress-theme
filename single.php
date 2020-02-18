<?php get_header(); ?>
<?php if (have_posts()) : ?>



    <?php while (have_posts()) : the_post(); ?>

        <div class="col-8 content">
            <h1><?php the_title(); ?></h1>
            <p class="date"><?php the_date(); ?></p>
            <div class="thumbnail">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
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