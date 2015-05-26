
        </div><!-- end .sitemap-col -->

        <div class="sitemap-col s-two">
            <p class="sitemap-title">Latest Blog Posts</p>
            <div class="article_preview">
            <?php foreach($trisemester->result() as $row)
            {
                ?>
                 <strong><a href="http://themes.truethemes.net/Sterling/truethemes-premium-wordpress"><?php echo $row->judul_forum;?></a></strong>
                 <p><a href="http://themes.truethemes.net/Sterling/truethemes-premium-wordpress"><?php echo $row->isi_forum;?>
                 </a></p><hr>
                 <?php
            };?></div><!-- end .sitemap-col -->
                 
           

    </div><!-- end #main-wrap -->

</section><!-- END content-container -->

<footer>
    <div class="center-wrap tt-relative">
        <div class="footer-content clearfix">
                            <div class="footer-default-one">
                    <div class="sidebar-widget widget_text">            <div class="textwidget"><p><img src="images/logo-white.png" alt="TrueThemes - Responsive Wordpress"></p>
</div>
        </div>                </div><!-- end .footer-default-one -->

       