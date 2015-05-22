
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#"><?php echo $admin;?></a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Berita</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-md-12">
                <table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Berita</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <?php foreach ($berita->result() as $row) {
                    echo " 
                        <tr>
                        <td> <a href='#'>". $row->id_berita." </td> <td> <a href='#'> " .$row->judul_berita.  
                        "</td></a><br><td class='center'>
                            <a class='btn btn-success' href='#'>
                                <i class='glyphicon glyphicon-zoom-in icon-white'></i>
                                View
                            </a>
                            <a class='btn btn-info' href='#'>
                                <i class='glyphicon glyphicon-edit icon-white'></i>
                                Edit
                            </a>
                            <a class='btn btn-danger' href='#'>
                                <i class='glyphicon glyphicon-trash icon-white'></i>
                                Delete
                            </a>
                        </td>
                        </tr>
                        ";
                }?>
                </table>
                </div>

                <div class="col-lg-5 col-md-12 visible-xs center-text">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 5 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:250px;height:250px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="8957582309"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <!-- Ads end -->

            </div>
        </div>
    </div>
</div>
