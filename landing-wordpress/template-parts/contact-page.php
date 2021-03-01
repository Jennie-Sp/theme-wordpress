<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

    <section class="bg-info text-white">
        <div class="container">
            <div class="row more-content">
                <div class="col-xl col-lg col-md-2 more-content-image image-in-contact">
                    <?php the_post_thumbnail('object-preview', ''); ?>
                </div>
                <div class="col-xl col-lg col-md-6 more-content-text py-5">
                    <h3 class="py-5"><?php the_content(); ?></h3>
                    <p><?php the_field('phone', 13); ?></p>
                    <p><?php the_field('mail', 13); ?></p>
                    <p><?php the_field('address', 13); ?></p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>