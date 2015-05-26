
        <div class="sitemap-col s-two">
            <p class="sitemap-title">Latest Blog Posts</p>
            <div class="article_preview"><strong><a href="http://themes.truethemes.net/Sterling/truethemes-premium-wordpress">Asiku masih sedikit</a></strong><p><a href="http://themes.truethemes.net/Sterling/truethemes-premium-wordpress">Bunda.. aku sudah 10 hari melahirkan, tapi asiku masih sedikit... dari asifit, lactamom, sayur daun katuk, ...</a></p><p align="right"> Baca Selengkapnya .. </p></div><p color="blue" align="center"> Halaman &nbsp; 1 | </p></div><!-- end .sitemap-col -->
            <?php
                foreach($trisemester->result() as $isi_forum){                    
                        echo "<div class='sitemap-col s-two'>
                                    <p class='sitemap-title'>Latest Blog Posts</p>
                                    <div class='article_preview'><strong><a href='#'>".$isi_forum->judul_forum."</a></strong><p><a href='#'>".$isi_forum['isi_forum']."</a></p><p align='right'> Baca Selengkapnya .. </p></div><p color='blue' align='center'> Halaman &nbsp; 1 | </p></div><!-- end .sitemap-col -->";

                                    
                }
                    
            ?>
