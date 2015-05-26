<script type="text/javascript" src="<?php echo base_url();?>js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link"
});
</script>

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

        <form method="post" action="<?php echo base_url();?>admin/tamgal" enctype="multipart/form-data">
            <h3>Judul</h3>
            <input type="text" id="judul" name="judul"/> </input>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input name="userFile" type="file" tabindex="1" value="NULL" />
            </div><hr>
            <h4> Deskripsi Gambar
            </h4>
            <textarea name="deskripsi" style="width:80%;height=80%;"></textarea>
            <input type="submit" class="btn btn-blue" style="float:right" value="Kirim">
        </form> 
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->