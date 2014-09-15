<?php get_header(); ?>
<section>
    <div class="slideshow srow">
        <script>
            jQuery('document').ready(function () {
                jQuery('.slides').cycle({
                    slides: '> li'
                });
            });
        </script>
        <ul class="slides">
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/01.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/02.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/03.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/04.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/05.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/06.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/07.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/08.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/09.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/10.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/11.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/12.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/13.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/14.jpg'; ?>" alt="" /></a></li>
            <li><a href="#" title=""><img src="<?php echo get_template_directory_uri() . '/demo/slide/15.jpg'; ?>" alt="" /></a></li>
            <div class="cycle-prev"><span class="fa fa-2x fa-chevron-left"></span></div>
            <div class="cycle-next"><span class="fa fa-2x fa-chevron-right"></span></div>
        </ul>
    </div>
    <div class="home-news">
        <?php knews(); ?>
    </div>
</section>
<footer>

</footer>
<?php get_footer(); ?>