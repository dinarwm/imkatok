<section class="small_banner">
            <div class="center-wrap ">
                    <p class="page-banner-heading">Infografik </p>        
                    <div class="breadcrumbs"><a href="<?php echo base_url() ?>home">Beranda</a> &rarr; <a href="http://themes.truethemes.net/Sterling/shortcodes">Infografik</a></span></div><!-- end .breadcrumbs -->
            </div><!-- end .center-wrap -->
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="tt-overlay"></div>
    </section>
<section id="content-container" class="clearfix">    
    <?php $key = $infografik->row_array(); ?>
    <div id="main-wrap" class="clearfix">
        
        <div class="column-clear">&nbsp;</div>
<h3 style="text-align: center;">Selamat! Anda telah memasuki <?php echo $key['umur'] ?> bulan usia kandungan !</h3>
<div align="center"><img src="<?php echo base_url() . $key['gambar'] ?>" align="center"></div>
<div class="column-clear">&nbsp;</div>
<div class="column-clear">&nbsp;</div>
<?php echo $key['keterangan']; ?>
    </div><!-- end #main-wrap -->
</section><!-- END content-container -->

