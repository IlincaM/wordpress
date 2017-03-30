<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package aThemes
 */
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
</div>
<!-- #main --></div>
<?php
get_sidebar('footer');
?>
<footer class="container-fluid no-padding-style">
    <div class="footer footer-color" id="footer">
        <div class="container-fluid">
            <div class="row row-footer">
                <div class="col-md-6">
                    <h3 class="h3-footer"> About Diet Bite</h3>
                    <p class="text-footer"> Lorem ipsum dolor sit amet, blandit tincidunt laoreet lacus. Lacus accumsan, arcu eu dictum dui. Et placerat, posuere est enim nibh, netus mauris pede metus turpis mauris. Veritatis laoreet. Penatibus</p>
                </div>
                <div class="col-md-6">
                    <h3 class="h3-footer"> Take your dose of diet biting </h3>
                    <ul>
                        <li>
                            <div class="">
                                <input type="text" class=" text-center input-height" placeholder="Enter your email adress ">
                                <button class="btn-style" type="button">subscribe</button>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <!--/.row--> 
            <div class="copyright-footer">
                <p>Copyright &copy; 2016 DietBite.com.All rights reserved. </p>
            </div>
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    <div class="footer-bottom container-fluid">
        <div class="footer-height-social">
            <ul class="social-footer">
                <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                <li> <a href="#"> <i class="fa fa-instagram">   </i> </a> </li>
                <li> <a href="#"> <i class="fa fa-pinterest-p">   </i> </a> </li>
                <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
            </ul>
        </div>
    </div>

</footer>
<footer id="colophon" class="site-footer-style container-fluid" role="contentinfo">
    <div class="clearfix containe-fluid">
        <nav id="main-navigation-blog" class="main-navigation-blog" role="navigation">

            <?php
            wp_nav_menu(array('container_class' => 'clearfix sf-menu-b blog menu-footer', 'before' => '<span class="underline">',
                'after' => '</span>', 'theme_location' => 'footer-menu'));
            ?>
        </nav>
    </div>
    <!-- #colophon --></footer>
<?php wp_footer(); ?>
</body>
</html>