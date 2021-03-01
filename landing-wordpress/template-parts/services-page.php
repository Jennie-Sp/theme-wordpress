<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

<section class="container py-5">
    <div class="py-5">
        <div class="row">

            <?
            // Check rows exists.
            if( have_rows('icon_arr_services') ):
                // Loop through rows.
                while( have_rows('icon_arr_services') ) : the_row();
                    // Load sub field value.
                    $sub_value = get_sub_field('icon_obj_services');
                    // Do something...
                    if( $sub_value ): ?>
                        <div class="col">
                            <div class="row g-0">
                                <div class="col-md-4 pt-4 text-info">
                                    <?= $sub_value['icon']?>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $sub_value['icon_heading']?></h5>
                                        <p class="card-text"><?= $sub_value['icon_text']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                    // End loop.
                endwhile;
            // No value.
            else :
                // Do something...
            endif;
            ?>

        </div>
    </div>
</section>


<?php get_footer(); ?>
