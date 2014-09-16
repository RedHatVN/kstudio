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
    <div class="srow home-news">
        <div class="scol hn-news alpha">
            <?php knews(1); ?>
        </div>
        <div class="scol hn-news">
            <?php knews(2); ?>
        </div>
        <div class="scol hn-fb omega">
            <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="340" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
        </div>
    </div>
</section>
<footer>

</footer>
<?php get_footer(); ?>