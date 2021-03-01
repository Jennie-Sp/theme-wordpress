
<footer>
    <div class="footer py-5">
        <div class="container py-5">


            <div class="row d-flex justify-content-between footer-menu">
                <div class="col-2"><h3 class="my-0 mr-md-auto font-weight-normal footer-logo"><a class="text-white" href="http://h98291ho.beget.tech"><?php bloginfo('name'); ?></a></h3></div>
                <div class="col-2">

                    <h6 class="footer-menu-heading"><?php the_field('footer-menu-heading1', 13);?></h6>
                    <nav class="main-navigation">
                        <? wp_nav_menu(array('menu' => 'footer-menu', 'menu_class' => 'footer-menu')); ?>
                    </nav>

                </div>
                <div class="col-2">

                    <h6 class="footer-menu-heading"><?php the_field('footer-menu-heading2', 13);?></h6>
                    <nav class="main-navigation">
                        <? wp_nav_menu(array('menu' => 'footer-menu', 'menu_class' => 'footer-menu')); ?>
                    </nav>

                </div>
                <div class="col-2">

                    <h6 class="footer-menu-heading"><?php the_field('footer-menu-heading3', 13);?></h6>
                    <nav class="main-navigation">
                        <? wp_nav_menu(array('menu' => 'footer-menu', 'menu_class' => 'footer-menu')); ?>
                    </nav>

                </div>
                <div class="col-4 d-flex">

                    <div class="footer-social">
                        <a href="<?php the_field('vk', 13)?>" class="text-white m-3">
                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-bootstrap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
                            </svg>
                        </a>
                    </div>

                    <div class="footer-social">
                        <a href="<?php the_field('vk', 13)?>" class="text-white m-3">
                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-bootstrap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
                            </svg>
                        </a>
                    </div>

                    <div class="footer-social">
                        <a href="<?php the_field('vk', 13)?>" class="text-white m-3">
                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-bootstrap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
                            </svg>
                        </a>
                    </div>
                    
                </div>
            </div>


            <div class="row mt-5">
                <div class="col text-center">
                    <p><?php the_field('copyright_text', 13); ?></p>
                </div>
            </div>


            <div class="row">
                <div class="col text-right">Copyright © 2020-<?php echo date('Y'); ?></div>
            </div>


        </div>
    </div>
</footer>


<!--vendor scripts-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--user scripts-->
<script src="<?php bloginfo('template_directory') ?>/js/script.js"></script>

</body>
</html>

