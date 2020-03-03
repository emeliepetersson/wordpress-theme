<?php /* Template name: About */ ?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <div class="row content">

        <?php while (have_posts()) : the_post(); ?>

            <div class="col-5 content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

    </div>
<?php endif; ?>

<!-- List all students -->
<?php $students = get_posts(['post_type' => 'student']); ?>

<?php if (count($students)) : ?>
    <div class="row content">
        <div class="col-5 content">
            <h2 class="h5">Students</h2>
            <ul>
                <?php foreach ($students as $post) : setup_postdata($post); ?>
                    <!-- setup_postdata() måste ha en variabel som heter $post? -->
                    <li class="mb-2">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                        <?php $skills = get_the_terms($spost, 'skill'); ?>

                        <p class="mb-0">Awesome at: </p>
                        <ul>
                            <?php foreach ($skills as $skill) : ?>
                                <li><a href="<?php echo get_term_link($skill) ?>"><?php echo $skill->name ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- /col -->
    </div><!-- /row -->
<?php endif; ?>

<?php get_footer(); ?>