<?php 
// Error Upload 
if (isset($error))  {
  echo '<div class="alert alert-warning">';
  echo $error;
  echo '</div>';
}
// Notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

//Form open ubah menjadi menjadi multipart karena fungsinya bukan hanya entry melainkan uplaod jg
echo form_open_multipart(base_url('backend/folder/add'),' class="form-horizontal"');
?>


<div class="card card-info">
    <div class="card-header ">
      <h3 class="card-title "><?php echo $title ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
  <form class="form-horizontal ">
    <div class="card-body">
      <div class="form-group row ">
        <label class="col-md-3 col-form-label"> Nama Folder</label>
        <div class="col-md-9">
          <input type="text" name="folder_name" class="form-control" placeholder="Nama Folder" value ="<?php echo set_value('folder_name')?>" required>
        </div>
      </div>

      <div class="form-group row ">
        <label class="col-sm-3 col-form-label"> Upload Cover</label>
        <div class="col-sm-9">
          <input type="file" name="folder_cover" class="form-control" required>
        </div>
      </div> 

      <div class="form-group row ">
        <label class="col-md-3 col-form-label"> Urutan</label>
        <div class="col-md-9">
          <input type="number" name="folder_numb" class="form-control" placeholder="Urutan Folder" value ="<?php echo set_value('folder_numb')?>" required>
        </div>
      </div>

       <div class="form-group row ">
        
        <div class="col-md-9">
          <button class="btn btn-success btn-lg" name="submit "type="submit">
            <i class="fa fa-save"> Simpan</i>
          </button>
          <button class="btn btn-info btn-lg" name="reset "type="reset">
            <i class="fa fa-times"> Reset</i>
          </button>
        </div>
      </div>
  </form>
</div>

<?php echo form_close(); ?>
