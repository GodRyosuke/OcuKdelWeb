<footer>
        <div class="row">
            <div class="footer-col">
                <h2>menu</h2>
<?php
wp_nav_menu(
    array (
        'theme_location' => 'place_footer',
        'container' => false,
    )
);
?>
                <!-- <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="professors.html">professor</a></li>
                    <li><a href="research.html">research</a></li>
                    <li><a href="thesis.html">publication</a></li>
                    <li><a href="member.html">member</a></li>
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul> -->
            </div>
            <div class="footer-col">
                <h2>links</h2>
                <ul>
                    <li><a href="https://www.osaka-cu.ac.jp">osaka city university</a></li>
                    <li><a href="https://www.osakafu-u.ac.jp">osaka prefecture university</a></li>
                    <li><a href="https://www.omu.ac.jp">osaka metropolitan university</a></li>
                    <li><a href="#">previous our page</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg2.jpg" alt="">
            </div>
        </div>
        <div class="copy-right">
            <p>2022 &copy; osaka metropolitan university kdel all rights researved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>