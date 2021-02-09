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
echo form_open_multipart(base_url('backend/file/add'),' class="form-horizontal"');
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
        <label class="col-md-3 col-form-label"> Nama File</label>
        <div class="col-md-9">
          <input type="text" name="file_name" class="form-control" placeholder="Nama File" value ="<?php echo set_value('file_name')?>" required>
        </div>
      </div>

      <div class="form-group row ">
        <label class="col-md-3 col-form-label"> Nomor File</label>
        <div class="col-md-9">
          <input type="text" name="ref_numb" class="form-control" placeholder="Nomor File" value ="<?php echo set_value('ref_numb')?>" required>
        </div>
      </div>

      <div class="form-group row ">
        <label class="col-md-3 col-form-label"> Kode File</label>
        <div class="col-md-9">
          <input type="text" name="file_code" class="form-control" placeholder="Kode File" value ="<?php echo set_value('file_code')?>" required>
        </div>
      </div>

      <div class="form-group row ">
        <label class="col-md-3 col-form-label"> Tahun File</label>
        <div class="col-md-9">
          <input type="number" name="file_year" class="form-control" placeholder="Tahun File" value ="<?php echo set_value('file_year')?>" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 control-label"> Lokasi Folder</label>
        <div class="col-md-9">
          <select name="folder_id" class="from-control col-md-12">
            <?php foreach($folder as $folder) { ?>
            <option value="<?php echo $folder->folder_id ?>">
              <?php echo $folder->folder_name ?>
            </option> 
          <?php } ?>
          </select>
        </div>
      </div>
      
      <div class="form-group row ">
        <label class="col-md-3 col-form-label"> Content</label>
        <div class="col-md-9">
          <textarea id="editor1" name="file_body" class= "form-control" placeholder="Content" > <?php echo set_value('file_body') ?></textarea>
        </div>
      </div> 

      <div class="form-group row">
        <label class="col-md-3 col-form-label"> Urutan File</label>
        <div class="col-md-9">
          <input type="number" name="file_numb" class="form-control" placeholder="Urutan File" value ="<?php echo set_value('file_numb')?>" required>
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


