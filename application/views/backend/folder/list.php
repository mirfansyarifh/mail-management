<p>
<a href="<?php echo base_url ('backend/folder/add'); ?>" class="btn btn-success btn-lg">
<i class="fa fa-plus">	</i> Tambah Baru
</a>
</p> 
<?php 
// Notifikasi 
if($this->session->flashdata('sukses')){
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</p>';
}
?>
<table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>NO</th>
                <th>NAMA FOLDER</th>
                <th>URUTAN</th>
                <th>COVER</th>
                <th>AKSI</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($folder as $folder) { ?>

            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $folder->folder_name ?></td>
                <td><?php echo $folder->folder_numb ?></td>
                <td>
                <img src="<?php echo base_url('assets/upload/folderimage/thumbs/'.$folder->folder_cover)?> " class ="img img-responsive img-thumbnail" widht="60">
                </td>
                <td>
                <a href="<?php echo base_url ('backend/folder/edit/'.$folder->folder_id) ?>" class ="btn btn-warning btn-xs"><i class ="fa fa-edit"></i> Edit </a>
                <a href="<?php echo base_url ('backend/folder/detail/'.$folder->folder_id) ?>" class ="btn btn-success btn-xs"><i class ="fa fa-eye"></i> View </a>
                                    <?php include ('delete.php')?>
                </td>
            </tr>
<?php $no++;} ?>
</tbody>
</table>