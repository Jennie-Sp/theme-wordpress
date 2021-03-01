<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

    <section class="container bg-white py-5 more-templates">
        <div class="row py-5 d-flex justify-content-around">
            <div class="col-5 more-templates-text">
                <h3><?php the_content(); ?></h3>
                <?
                // Check rows exists.
                if( have_rows('more-templates-about') ):

                    // Loop through rows.
                    while( have_rows('more-templates-about') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('more-templates-about-obj');
                        // Do something...

                        if( $sub_value ): ?>
                            <h4><?= $sub_value['more-templates-about-heading2']?></h4>
                            <p class="more-templates-content"><?= $sub_value['more-templates-about-info']?></p>
                        <?php endif;
                        // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
                ?>
            </div>
            <div class="col-5 d-flex flex-wrap more-templates-image">

                <?
                // Check rows exists.
                if( have_rows('img_arr_about') ):

                    // Loop through rows.
                    while( have_rows('img_arr_about') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('img_about');
                        // Do something...

                        if( $sub_value ): ?>
                            <a class="more-templates-image-link" href="<?= $sub_value['img_link_about']?>">
                                <span>+</span>
                                <div class="more-templates-image-all" style="background-image: url(<?= $sub_value['img_pic_about']?>);"></div>
                            </a>
                        <?php endif;
                        // End loop.
                    endwhile;
                else :
                    // Do something...
                endif;
                ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>


