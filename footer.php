<?php
/**
 * The template for displaying the footer
 * @package avoriazchalets
 */
?>
</main>
<footer>
    <div class="footer-wrapper">
        <div class="container row footer">
            <div class="col-desktop-1">
            </div>
            <div class="col-desktop-5 col-mobile-12 contact-section">
                <div class="socials mobile">
                    <?php if( have_rows('social_links', 'option') ): while( have_rows('social_links', 'option') ): the_row(); ?>
                    <a href="<?php the_sub_field('page_link'); ?>"><i
                            class="fab fa-<?php the_sub_field('name'); ?>"></i></a>
                    <?php endwhile; endif; ?>
                </div>
                <h4 class="heading heading__6">Contact</h4>
                <ul>
                    <li>Phone: <span class="phonenumber"><?php the_field('telephone', 'options');?></span></li>
                    <li>Email: <span><?php the_field('email', 'options');?></span></li>
                </ul>
                <div class="socials no-mob">
                    <?php if( have_rows('social_links', 'option') ): while( have_rows('social_links', 'option') ): the_row(); ?>
                    <a href="<?php the_sub_field('page_link'); ?>"><i
                            class="fab fa-<?php the_sub_field('name'); ?>"></i></a>
                    <?php endwhile; endif; ?>
                </div>
            </div>

            <div class="col-desktop-6 col-mobile-12 menu-section">
                <h4 class="heading heading__6">Links</h4>
                <?wp_nav_menu( array( 
				'theme_location' => 'footer-menu'
			) ); ?>


            </div>
        </div>
    </div>
    <div class="footer-credits">
        <div class="container">
            <div class="row">
                <div class="col-desktop-1">
                </div>
                <div class="col-mobile-12 col-desktop-5">
                    <div class="copyright">
                        <p>&copy; <?php echo get_bloginfo(); ?> <?php echo date ('Y');?>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-mobile-12 col-desktop-6">
                    <div class="right-col termscons">
                        <a href="/terms-conditions">Terms & Conditions</a> |
                        <a href="/privacy">Privacy Policy</a>
                    </div>
                </div>
            </div>

            <!-- <div class="silverless logo-holder">
                    <a href="https://silverless.co.uk"><?php get_template_part('inc/img/silverless', 'logo');?></a>
                </div> -->



        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>