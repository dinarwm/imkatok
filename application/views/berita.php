<section class="small_banner">
            <div class="center-wrap ">
        <p class="page-banner-heading">Berita Terkini</p>
        
                    <div class="breadcrumbs"><a href="">Home</a>&rarr; <span class='current_crumb'>Berita Terkini </span></div><!-- end .breadcrumbs -->
            </div><!-- end .center-wrap -->
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="tt-overlay"></div>
    </section>
<section id="content-container" class="clearfix">
    <div id="main-wrap">
        <div class="page_content blog_page_content">
            
                <?php foreach($results as $data) { ?>
                <div id="post-452" class="post-452 post type-post status-publish format-standard hentry category-responsive-wordpress tag-app tag-business-2 tag-css3 tag-envato tag-html5 tag-premium tag-responsive tag-software tag-templates-2 tag-themes-2 tag-truethemes tag-wordpress-2">
                    <article class="preview blog-main-preview">
                        <h2 class="entry-title"><a href="" title="TrueThemes &#8211; Premium WordPress"><?php echo $data->judul_berita ?></a></h2>
                                                        <span class="metadata postinfo">
                                </span>
                                <?php if($data->foto_berita != NULL && $data->foto_berita != "") {
                                    echo '<img src="' . base_url() . $data->foto_berita . '" height="100px" width="256px" align="center"> </br> </br>'; } ?>
                                <?php echo $data->isi_berita ?>
                    </article><!-- end .blog-main-preview -->
                </div><!-- end #post-ID -->
                <?php } ?>
                <div class="wp-pagenavi">
                    <span class="pages">Page </span> <span><a><?php echo $links ?></a></span>            
                </div>
    </div><!-- end #main-wrap -->
<!-- end #main-wrap -->

</section>