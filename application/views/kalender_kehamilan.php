<style>
.circle {
    position: relative;
    margin: 7em auto;
    width: 25em; height: 25em;
    border-radius: 50%;
    background: lightblue;
}
.arc9 {    
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(0deg) skewX(50deg);
}
.arc9:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #FE2EF7;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}

.arc1 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(40deg) skewX(50deg);
}
.arc1:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #58ACFA;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}

.arc2 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(80deg) skewX(50deg);
}
.arc2:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #58FA58;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}

.arc3 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(120deg) skewX(50deg);
}
.arc3:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #FE2EF7;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}

.arc4 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(160deg) skewX(50deg);
}
.arc4:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #58ACFA;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}

.arc5 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(200deg) skewX(50deg);
}
.arc5:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #58FA58;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}
.arc6 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(240deg) skewX(50deg);
}
.arc6:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #FE2EF7;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}

.arc7 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(280deg) skewX(50deg);
}
.arc7:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #58ACFA;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}

.arc8 {
    overflow: hidden;
    position: absolute;
    top: -1em; right: 50%; bottom: 50%; left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(320deg) skewX(50deg);
}
.arc8:before {
    box-sizing: border-box;
    display: block;
    border: solid 14em #58FA58;
    width: 200%; height: 200%;
    border-radius: 50%;
    transform: skewX(-50deg);
    content: '';
}
</style>
<section class="small_banner">
            <div class="center-wrap ">
                    <p class="page-banner-heading">Kalender Kehamilan</p>
        
        
                    <p class="page-banner-description" id="banner-description-643">Memuat tentang tahapan kehamilan per bulan</p>
        
                    <div class="breadcrumbs"><a href="<?php base_url() ?>home">Beranda</a> &rarr; <span class='current_crumb'>Kalender kehamilan </span></div><!-- end .breadcrumbs -->
            </div><!-- end .center-wrap -->
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="tt-overlay"></div>
    </section>

<section id="content-container" class="clearfix">
    <div id="gallery-outer-wrap" class="clearfix" >
        <div id="main-wrap" class="clearfix" >
            <div id="iso-wrap" class="clearfix" >
                        <p style="font-size:17px; padding-left:150px; padding-bottom:30px;" >Klik bulan tertentu untuk mengetahui tips dan info bagi ibu hamil pada usia kandungan tersebut</p><br/>
                        <div class='one_third'>
                        </div>
                        <div class='circle one_third'>   
                            <?php $count = 0;
                                foreach ($bulan as $row) { 
                                $count = $count + 1; ?>
                                <a href='<?php echo base_url() . $row->gambar ?>' class='arc<?php echo $count ?>' data-gal="prettyPhoto" title="<?php echo $row->keterangan ?>"></a>
                            <?php } ?>                        
                        </div>
                        <div class='one_third'>
                        </div>
            </div><!-- end .img-frame -->
        </div>
        </div><!-- end .one-half -->
    </div><!-- end #iso-wrap -->
        </div><!-- end #main-wrap -->
    </div><!-- end #gallery-outer-wrap -->
</section><!-- END content-container -->
</div><!-- end .tt-wide-layout -->