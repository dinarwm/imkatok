

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
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Datatable + Responsive</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID Forum</th>
        <th>Trisemester</th>
        <th>Judul Forum</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($forum->result() as $row) {?>
       
    <tr>
        <td><?php echo $row->id_forum;?></td>
        <td class="center"><?php echo $row->trisemester;?></td>
        <td class="center"><?php echo $row->judul_forum;?></td>
        <td class="center">
            <a class="btn btn-success" href="<?php echo base_url();?>admin/lihatforum/<?php echo $row->id_forum;?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-danger" href="<?php echo base_url();?>admin/deleteforum/<?php echo $row->id_forum;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php
    }
    ?>
    <a class="btn btn-info" href="<?php echo base_url();?>admin/tambahforum">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Tambah Forum
            </a>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
