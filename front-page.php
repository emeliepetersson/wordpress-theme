<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <div class="col-8 content">

        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>

    </div>
<?php endif; ?>

<?php
$args = [
    "numberposts" => 2,
    "order" => "desc"
];
$latestPosts = get_posts($args);
?>

<div class="col-8 content">
    <h2>Blog posts!</h2>
    <?php foreach ($latestPosts as $post) : setup_postdata($post); ?>
        <h2><?php echo the_title(); ?></h2>
        <p><?php echo the_excerpt(); ?></p>
        <p><a href="<?php echo get_permalink(); ?>">Read more.</a></p>
    <?php endforeach; ?>
</div>

<div class="col-8 content">
    <h3><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Visit the blog!</a></h3>
</div>

<?php get_footer(); ?>