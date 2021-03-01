<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>


<main>
    <section class="bg-info text-center py-5">
        <div class="container py-5">
            
            <?
            // Check rows exists.
            if( have_rows('hello-text') ):

                // Loop through rows.
                while( have_rows('hello-text') ) : the_row();

                    // Load sub field value.
                    $sub_value = get_sub_field('hello-text-obj');
                    // Do something...

                    if( $sub_value ): ?>
                        <h1 class="jumbotron-heading text-white py-3"><?= $sub_value['hello-text-heading']?></h1>
                        <p class="lead text-dark"><?= $sub_value['hello-text-info']?></p>
                    <?php endif;
                    // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;
            ?>

            <p class="py-3">
                <?php
                $hero = get_field('btn-1');
                if( $hero ): ?>
                    <a class="btn btn-light p-3 badge-pill" href="<?= $hero['btn-1-link']?>"><?= $hero['btn-1-text']?></a>
                <?php endif; ?>

                <?php
                $hero = get_field('btn-2');
                if( $hero ): ?>
                        <a class="btn btn-outline-light p-3 badge-pill" href="<?= $hero['btn-2-link']?>"><?= $hero['btn-2-text']?></a>
                <?php endif; ?>
            </p>
        </div>
    </section>

    <section class="container bg-white py-5 more-templates">
        <div class="row py-5 d-flex justify-content-around">
            <div class="col-5 more-templates-text">

                <h3><? the_field('more-templates-heading1');?></h3>
                <?
                // Check rows exists.
                if( have_rows('more-templates-arr') ):

                    // Loop through rows.
                    while( have_rows('more-templates-arr') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('more-templates-obj');
                        // Do something...

                        if( $sub_value ): ?>
                            <h4><?= $sub_value['more-templates-heading2']?></h4>
                            <p class="more-templates-content"><?= $sub_value['more-templates-info']?></p>
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
                if( have_rows('img_arr') ):

                    // Loop through rows.
                    while( have_rows('img_arr') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('img');
                        // Do something...

                        if( $sub_value ): ?>
                            <a class="more-templates-image-link" href="<?= $sub_value['img_link']?>">
                                <span>+</span>
                                <div class="more-templates-image-all" style="background-image: url(<?= $sub_value['img_pic']?>);"></div>
                            </a>
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



            <section class="bg-info text-white">
        <div class="container">
            <div class="row more-content">
                <div class="col-xl col-lg col-md-2 more-content-image">
                    <?php the_post_thumbnail('object-preview', ''); ?>
                </div>
                <div class="col-xl col-lg col-md-6 more-content-text py-5">

                    <h3><? the_field('more-content-heading1');?></h3>
                    <?
                    // Check rows exists.
                    if( have_rows('more-content-arr') ):

                        // Loop through rows.
                        while( have_rows('more-content-arr') ) : the_row();

                            // Load sub field value.
                            $sub_value = get_sub_field('more-content-obj');
                            // Do something...

                            if( $sub_value ): ?>
                                <h4><?= $sub_value['more-content-heading2']?></h4>
                                <p><?= $sub_value['more-content-info']?></p>
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
        </div>
    </section>

    <section class="container py-5">
        <div class="py-5">
            <div class="row">

                        <?
                        // Check rows exists.
                        if( have_rows('icon_arr') ):
                        // Loop through rows.
                        while( have_rows('icon_arr') ) : the_row();
                        // Load sub field value.
                        $sub_value = get_sub_field('icon_obj');
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

</main>

<?php get_footer(); ?>