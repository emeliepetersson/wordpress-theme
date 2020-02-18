<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<?php
if (is_front_page()) {
    $awesome_classes = ['awesome-class', 'my-class'];
} else {
    $awesome_classes = ['no-awesome-class'];
}

?>

<body <?php body_class($awesome_classes); ?>>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">wu19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <?php foreach (get_pages(['sort_column' =>  'menu_order']) as $page) : ?>
                    <li class="nav-item 
                    <?php $obj_id = get_queried_object_id();
                    $current_url = get_permalink($obj_id);

                    // Add active state to current url
                    if ($current_url === get_page_link($page->ID)) {
                        echo "active";
                    }; ?>
                    ">
                        <a class="nav-link" href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </nav>

    <div class="container">