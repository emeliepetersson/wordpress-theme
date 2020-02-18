<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <div class="row">

        <?php while (have_posts()) : the_post(); ?>

            <div class="col-8 content">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="thumbnail thumbnail-sm">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>

                <?php endif; ?>
                <?php the_excerpt(); ?>
            </div>

        <?php endwhile; ?>

    </div>
<?php endif; ?>

<?php get_footer(); ?>