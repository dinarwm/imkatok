
<section class="banner-slider">
        <div class="center-wrap">
            <div id="slides">
                <div class="slides_container">
                
                <div class="clearfix home-slider-post" id="slider-post-1058">
                    <p><img class="aligncenter size-full wp-image-1059" title="Image - Web Display" src="<?php echo base_url() ?>images/cover.png" width="445" height="260" /></p>
                </div><!-- end .home-slider-post -->

                <div class="clearfix home-slider-post" id="slider-post-877">
                <!-- Gambar ibu hamil -->
                    <div class="one_half">
                        <div class="img-frame full-half"><img src="<?php echo base_url() ?>images/pregnan.jpg" alt="" height="42" width="445"/></div>            
                    </div>

                    <div class="one_half">
                        <h2>Pregnancy</h2>
        					<p>Welcome to pregnancy! This is the start of an incredible journey. To help you along, we offer info on pregnancy aches and pains, weight gain and nutrition, what's safe during pregnancy and what's not, pregnancy stages, labor and delivery, and more -- plus how to sift through all those baby names to find the perfect one.</p>
                    </div>
                </div><!-- end .home-slider-post -->
                    </div><!-- end .slides_container -->
            </div><!-- end #slides -->
        </div><!-- end .center-wrap -->
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="tt-overlay"></div>

        <a href="#" class="next">Next</a>
        <a href="#" class="prev">Prev</a>
    </section>


<section id="content-container" class="clearfix">
    <div id="main-wrap" class="main-wrap-slider clearfix">
        <div class="two_thirds">

            <?php foreach($results as $data) { ?>
			<div class="home-vertical-callout clearfix">
			<?php if ($data->foto_berita != NULL && $data->foto_berita != "") { ?><div class="img-frame full-third-short"><a href="" target="_self"><img style="height: 85%;" src="<?php echo base_url() . $data->foto_berita ?>" height="124px" width="280px" alt="Premium WordPress Theme by TrueThemes" width="280" height="124"/></a></div> <?php } ?>
			<div class="home-vertical-content">
			<h5><a href="#"><?php echo $data->judul_berita ?></a></h5>
			<?php
                    if (strlen($data->isi_berita) > 100) {
                        $stringCut = substr($data->isi_berita, 0, 100);
                        echo substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                    }
                    else
                        echo $data->isi_berita;
            ?>
            <p><a href="<?php echo base_url()?>news" class="small green tt-button" target=""> Menu Berita → </a></p>
			</div>
			</div>
            <?php } ?>

        </div><!-- end .two_thirds -->
        <?php if ($forum != "hide") { ?>
        <div class="one_third">
            <div class="home-vertical-sidebar">
                <div class="sidebar-widget show_recent"><p class="widget-heading">Forum</p>
                <p class="recent-post-widget-title"><a href="">Trisemester 1</a></p>
                <p class="recent-post-widget-text"><a href="">Forum untuk trisemster 1 lalala</a></p>

            
                <p class="recent-post-widget-title"><a href="">Trisemester 2</a></p>
                <p class="recent-post-widget-text"><a href="">Forum untuk trisemster 2 lalala</a></p>

            
                <p class="recent-post-widget-title"><a href="http://themes.truethemes.net/Sterling/professional-wordpress-theme">Trisemester 3</a></p>
                <p class="recent-post-widget-text"><a href="http://themes.truethemes.net/Sterling/professional-wordpress-theme">Forum untuk trisemster 3 lalala</a></p>

            </div>            </div><!-- end .home-vertical-sidebar -->
        </div><!-- end .one_third -->
        <?php } ?>
    </div><!-- end .main-wrap -->

</section><!-- END content-container -->



