<footer>
        <div class="container-fluid top_footer">
            <div class="container footerContainer">
                <div class="footer_item">
                    <span class="header-footer-menu">NAVIGATION</span>
                    <?php wp_nav_menu('bottom_menu') ?>
                </div>
                <?php dynamic_sidebar( 'footer-contact' ); ?>
                <div class="footer_item">
                <?php echo do_shortcode('[contact-form-7 id="89" title="Contact form 1"]');?>
                </div>
            </div>
        </div>
        <div class="container-fluid bottomFooter">
            <div class="container">
                © Copyright <?php echo date('Y');?> | Powered By <?php the_author(); ?>
            </div>
        </div>
    </footer>
    <script>document.querySelector(".form-submit").value = "Contact Us";</script>