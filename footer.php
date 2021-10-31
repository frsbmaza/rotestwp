<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Remote_Office
 */

?>
    <!-- start footer section -->
    <footer>
        <div class="container">
            <div class="footer-content-wrap">
                <div class="footer-content d-flex justify-content-between">
                    <p class="copyright"><i class="far fa-copyright"></i> <?php echo carbon_get_theme_option('copyright_text');?> </p>
                    <p class="social_links">

                    <?php
							$socials = carbon_get_theme_option( 'crb_social_items' );
							foreach ( $socials as $social ) { ?>
                            <a href="<?php echo $social['crb_social_item_url']; ?>"><img src="<?php echo $social['crb_social_item_image']; ?>" alt="<?php echo $social['crb_social_item_title']; ?>"></a>
							<?php
							}
						?>
                    </p>
                </div>
            </div>
    </footer>
    <!-- end footer section -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>

jQuery(function () {
	jQuery(".typed").typed({
		strings: [<?php echo carbon_get_theme_option('typed_text');?>],
		typeSpeed: 70,
	    startDelay: 800,
	    backDelay: 1200,
	    backSpeed: 20,
		smartBackspace: 1,
	    loop: true,
	    cursorChar: "|",
	    contentType: 'html', // or text
		// attribute to type (null == text)
		attr: null,
		// call when done callback function
		callback: function () {},
		// starting callback function before each string
		preStringTyped: function () {},
		//callback for every typed string
		onStringTyped: function () {},
		// callback for reset
		resetCallback: function () {}
	});
});

</script>

</body>
</html>
